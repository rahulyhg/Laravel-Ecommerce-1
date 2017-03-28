FROM php:7-fpm

# Install php for docker and install extensions
RUN apt-get update && apt-get install -y libmcrypt-dev mysql-client git \
    && docker-php-ext-install mcrypt pdo_mysql mysqli

COPY ./Wordpress /var/www/Wordpress
WORKDIR /var/www/Wordpress
