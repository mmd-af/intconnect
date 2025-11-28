# syntax=docker/dockerfile:1.4

# Arguments for PHP version and user IDs
ARG PHP_VERSION=8.3
ARG UID=1000
ARG GID=1000

# Start from the official PHP-FPM image
FROM php:${PHP_VERSION}-fpm-bookworm

# Re-declare ARGs
ARG UID
ARG GID
ARG DEBIAN_FRONTEND=noninteractive

# Install system dependencies for PHP extensions
RUN apt-get update && apt-get install -y --no-install-recommends \
    git zip unzip \
    libpng-dev libjpeg-dev libwebp-dev libfreetype6-dev \
    libonig-dev libxml2-dev libzip-dev libicu-dev \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install -j$(nproc) \
    bcmath sockets pdo_mysql exif pcntl gd zip intl opcache

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set up work directory and user
WORKDIR /var/www
RUN groupadd -g ${GID} --non-unique intconnect && \
    useradd -u ${UID} -g intconnect -G www-data -m -d /var/www intconnect

# Copy staging PHP configuration
COPY docker/staging/php.ini /usr/local/etc/php/conf.d/staging-php.ini

# Copy the simplified entrypoint
COPY docker/staging/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Switch to non-root user
USER intconnect

# Expose PHP-FPM port and define entrypoint/command
EXPOSE 9000
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
CMD ["php-fpm"]