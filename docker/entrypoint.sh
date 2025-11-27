#!/bin/sh
set -e

# This script is executed every time the container starts.

# The "$@" is a shell variable that means "all the arguments".
# In this case, it will be the command passed by Docker, e.g., "php-fpm".
# 'exec' replaces the current shell process with the new one, which is a best practice.
echo "Starting container process..."
exec "$@"
