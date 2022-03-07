#!/bin/bash
set -e

echo "Deployment started ..."
(php artisan down) || true

git pull origin deploy

composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader
php artisan clear-compiled
php artisan optimize

chmod -R 777 storage/ bootstrap/

php artisan migrate --force
php artisan up
echo "Deployment finished!"
