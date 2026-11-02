#!/bin/sh
# Container entrypoint: applies per-environment runtime config, then runs CMD.
#
# Env values (APP_URL, APP_ENV, DB_*, APP_KEY, ...) are injected at `docker run`
# time via --env-file. We (re)build the config cache here so those values are
# reflected, instead of baking them into the image at build time.
set -e

cd /var/www/html

# Ensure an APP_KEY exists. Prefer the injected one; generate a throwaway only
# if none was provided (not recommended for production — set APP_KEY per host).
if [ -z "$APP_KEY" ]; then
    echo "[entrypoint] WARNING: APP_KEY not set, generating an ephemeral key."
    php artisan key:generate --force
fi

# Rebuild caches against the runtime environment.
php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Opt-in database migrations (set RUN_MIGRATIONS=true in the server's env file).
if [ "$RUN_MIGRATIONS" = "true" ]; then
    echo "[entrypoint] Running migrations..."
    php artisan migrate --force
fi

exec "$@"
