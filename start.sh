#!/usr/bin/env bash
set -e

# wait-for-db (simple loop); adjust DB_HOST & DB_PORT from env
echo "Waiting for DB to be ready..."
TRIES=0
MAX_TRIES=30
until php -r "try { new PDO(getenv('DB_CONNECTION') === 'pgsql' ? getenv('DATABASE_URL') : sprintf('mysql:host=%s;port=%s', getenv('DB_HOST'), getenv('DB_PORT')), getenv('DB_USERNAME'), getenv('DB_PASSWORD')); echo 'db ok'; } catch (Exception \$e) { exit(1);}"; do
  TRIES=$((TRIES+1))
  if [ "$TRIES" -ge "$MAX_TRIES" ]; then
    echo "DB not available after $MAX_TRIES tries"
    exit 1
  fi
  sleep 2
done

# install vendor if missing (only in ephemeral image situations)
if [ ! -d "vendor" ]; then
  composer install --no-dev --prefer-dist --no-interaction --optimize-autoloader
fi

# set app key if missing
php artisan key:generate --force

# config cache (optional)
php artisan config:cache || true
php artisan route:cache || true || true

# run migrations
php artisan migrate --force || true

# create storage symlink
php artisan storage:link || true

# start php-fpm (or your preferred process)
php-fpm
