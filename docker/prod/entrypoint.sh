#!/bin/sh
set -e

# This script is executed every time the container starts.
# It's a good place to run tasks that should happen at startup.

# For a Laravel application, it's a good practice to cache the configuration,
# routes, and views for better performance in production.
# The `optimize` command handles this.
echo "Optimizing Laravel application..."
php artisan optimize

# The "$@" is a shell variable that means "all the arguments".
# In this case, it will be the command passed by Docker, e.g., "php-fpm".
# 'exec' replaces the current shell process with the new one, which is a best practice.
echo "Handing over to main container process..."
exec "$@"
