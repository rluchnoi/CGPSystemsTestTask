FROM php:8.1-fpm

ADD docker/php/start-script.sh /opt/docker-entrypoint.sh

RUN apt-get update && apt-get install -y \
  zlib1g-dev \
  libzip-dev \
  unzip \
  libpng-dev

RUN apt-get update \
  && docker-php-ext-install pdo pdo_mysql zip pcntl \
  && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=2.2.0 \
  && docker-php-ext-install -j$(nproc) gd \
  && docker-php-ext-configure gd

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY docker/xdebug/xdebug.ini "${PHP_INI_DIR}/conf.d"
COPY docker/php/php.ini "${PHP_INI_DIR}/conf.d"
