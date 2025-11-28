# syntax=docker/dockerfile:1.4

# Arguments for PHP version and user IDs
ARG PHP_VERSION=8.3
ARG UID=1000
ARG GID=1000

# --- Stage 1: Build Frontend Assets ---
FROM node:20-alpine AS frontend_builder
WORKDIR /app
COPY src/package.json src/package-lock.json ./
RUN npm ci
COPY src/ .
RUN npm run build

# --- Stage 2: Build PHP Application ---
FROM php:${PHP_VERSION}-fpm-bookworm AS app_builder

# Re-declare ARGs
ARG UID
ARG GID
ARG DEBIAN_FRONTEND=noninteractive

# Install system dependencies for PHP extensions & Supervisor
RUN apt-get update && apt-get install -y --no-install-recommends \
    git zip unzip \
    libpng-dev libjpeg-dev libwebp-dev libfreetype6-dev \
    libonig-dev libxml2-dev libzip-dev libicu-dev \
    supervisor \
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

# Install Composer dependencies
COPY src/composer.json src/composer.lock ./
RUN composer install --no-dev --no-scripts --optimize-autoloader

# Copy application source code
COPY src/ .

# Copy built frontend assets
COPY --from=frontend_builder /app/public/build /var/www/public/build

# Copy entrypoint and make it executable
COPY docker/staging/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Set permissions for Laravel
RUN chown -R intconnect:www-data /var/www && \
    chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache && \
    chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Switch to non-root user
USER intconnect

# Expose PHP-FPM port
EXPOSE 9000

# Define entrypoint and default command
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
CMD ["php-fpm"]