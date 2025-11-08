ARG PHP_VERSION=8.3
FROM php:${PHP_VERSION}-fpm

ARG UID=1000
ARG GID=1000

RUN apt update && apt install -y \
    git \
    zip \
    unzip \
    librabbitmq-dev \
    libssh-dev \
    libonig-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

RUN docker-php-ext-install \
    bcmath \
    sockets \
    pdo_mysql \
    exif \
    pcntl \
    gd \
    zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN groupadd -g ${GID} --non-unique intconnect && \
    useradd -u ${UID} -g intconnect -G www-data -m -d /var/www intconnect

RUN chown -R intconnect:intconnect /var/www

USER intconnect

WORKDIR /var/www
