FROM php:7.3-fpm-alpine

RUN set -ex \
  && apk --no-cache add \
    autoconf gcc g++ make libzip-dev git libpng libjpeg-turbo libpng-dev libjpeg-turbo-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer
RUN composer global require hirak/prestissimo

# Install Zip
# https://github.com/docker-library/php/issues/797
RUN docker-php-ext-configure zip --with-libzip=/usr/include
RUN docker-php-ext-install zip

# Install Opcache
RUN docker-php-ext-install opcache

# Install gd
RUN docker-php-ext-configure gd --with-gd --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/
RUN docker-php-ext-install gd

# Install APCu
RUN pecl install apcu
RUN docker-php-ext-enable apcu
