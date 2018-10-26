FROM php:7.1-apache
COPY php.ini /usr/local/etc/php/
RUN apt-get update \
  && apt-get install -y libfreetype6-dev libicu-dev libjpeg62-turbo-dev libpng-dev libmcrypt-dev \
  && docker-php-ext-install pdo_mysql mysqli mbstring gd iconv mcrypt intl zip \
  && a2enmod rewrite \
  && usermod -u 1000 www-data \    
  && groupmod -g 1000 www-data 
