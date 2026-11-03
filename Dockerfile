# syntax=docker/dockerfile:1

# ---- Stage 1: build front-end assets with Vite ----
FROM node:22 AS assets

WORKDIR /var/www/html
COPY package.json package-lock.json ./
RUN npm ci

COPY . .
RUN npm run build

# ---- Stage 2: PHP runtime ----
FROM php:8.4-cli

# System deps + PHP extensions (PostgreSQL, GD, mbstring, zip)
RUN apt-get update -y \
    && apt-get install -y --no-install-recommends \
        openssl zip unzip git \
        libonig-dev libpq-dev libpng-dev libjpeg-dev libfreetype6-dev libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_pgsql pgsql mbstring gd zip bcmath \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www/html

# Install PHP dependencies first (better layer caching)
COPY composer.json composer.lock ./
RUN git config --global --add safe.directory /var/www/html \
    && composer install --no-dev --no-scripts --no-autoloader --prefer-dist --no-interaction

# Copy application source + built assets from the assets stage
COPY . /var/www/html
COPY --from=assets /var/www/html/public/build /var/www/html/public/build

# Build-time ONLY: a throwaway .env + empty SQLite file so `php artisan
# package:discover` can boot (a service provider probes the DB via hasTable()).
# Both are deleted in the same layer, so the final image ships NO .env and NO
# database file — every configuration value comes from `docker run --env-file`
# at container start (see entrypoint). This prevents .env.example defaults
# (e.g. APP_ENV=local, APP_DEBUG=true) from leaking as runtime fallbacks.
RUN cp .env.example .env \
    && mkdir -p database \
    && touch database/database.sqlite \
    && composer dump-autoload --optimize --no-dev \
    && php artisan package:discover --ansi \
    && php artisan storage:link \
    && chown -R www-data:www-data storage bootstrap/cache \
    && rm -f .env database/database.sqlite

# NOTE: config/route/view caching is intentionally deferred to the entrypoint so
# that per-environment runtime variables are reflected in the cached config.
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

EXPOSE 8882
ENTRYPOINT ["entrypoint.sh"]
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8882"]
