#!/bin/sh
set -e

# This script is executed every time the container starts.

# Change to the application directory
cd /var/www

echo "Running production entrypoint commands..."

# Optimize configuration and routes for production
php artisan config:cache
php artisan route:cache

# Run database migrations
# The --force flag is important for running in production without a prompt
php artisan migrate --force

# Create the storage symlink if it doesn't exist
if [ ! -L "/var/www/public/storage" ]; then
    echo "Creating storage symlink..."
    php artisan storage:link
else
    echo "Storage symlink already exists."
fi

# The "$@" is a shell variable that means "all the arguments".
# In this case, it will be the command passed by Docker, e.g., "php-fpm".
# 'exec' replaces the current shell process with the new one, which is a best practice.
echo "Starting PHP-FPM..."
exec "$@"
