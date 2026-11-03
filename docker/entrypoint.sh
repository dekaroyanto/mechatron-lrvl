#!/bin/sh
# Container entrypoint: applies per-environment runtime config, then runs CMD.
#
# Env values (APP_URL, APP_ENV, DB_*, APP_KEY, ...) are injected at `docker run`
# time via --env-file. We (re)build the config cache here so those values are
# reflected, instead of baking them into the image at build time.
set -e

cd /var/www/html

# Ensure an APP_KEY exists. Prefer the injected one; generate an ephemeral key
# only if none was provided. The image ships no .env, so we export the key into
# the environment (not write it to a file) for the cache steps below.
# NOT recommended for production — set APP_KEY in the server's env file.
if [ -z "$APP_KEY" ]; then
    echo "[entrypoint] WARNING: APP_KEY not set, generating an ephemeral key."
    APP_KEY="$(php artisan key:generate --show)"
    export APP_KEY
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
