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

# A throwaway .env so build-time artisan can boot. Real values (APP_URL, DB,
# APP_KEY, ...) are injected at runtime via `docker run --env-file` and win over
# this file, because env is NOT cached at build (see entrypoint).
# The SQLite placeholder is required because the default DB connection in
# .env.example is SQLite, and database/database.sqlite is git-ignored (so it is
# absent from the build context). Laravel's SQLite connector throws when the
# file is missing.
RUN cp .env.example .env \
    && mkdir -p database \
    && touch database/database.sqlite

# Finish composer setup (autoloader + package discovery) now that code is present
RUN composer dump-autoload --optimize --no-dev \
    && php artisan package:discover --ansi \
    && php artisan storage:link \
    && chown -R www-data:www-data storage bootstrap/cache

# NOTE: config/route/view caching is intentionally deferred to the entrypoint so
# that per-environment runtime variables are reflected in the cached config.
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

EXPOSE 8882
ENTRYPOINT ["entrypoint.sh"]
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8882"]
