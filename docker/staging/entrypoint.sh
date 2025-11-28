#!/bin/sh
set -e

# The "$@" is a shell variable that means "all the arguments".
# In this case, it will be the command passed by Docker, e.g., "php-fpm".
# 'exec' replaces the current shell process with the new one, which is a best practice.
echo "Handing over to main container process..."
exec "$@"
