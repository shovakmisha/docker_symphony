FROM php:7.1-fpm

RUN apt-get update

RUN yes | pecl install xdebug-2.9.0 \
    && docker-php-ext-enable xdebug

COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer

COPY conf.d/* $PHP_INI_DIR/conf.d/