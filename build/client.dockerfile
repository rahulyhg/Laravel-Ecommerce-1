FROM php:7-fpm

# Install sudo and add user
# RUN apt-get update && \
#    apt-get -y install sudo
# RUN useradd -m docker && echo "docker:docker" | chpasswd && adduser docker sudo

# Install php for docker and install extensions
RUN apt-get update && apt-get install -y libmcrypt-dev mysql-client git \
    && docker-php-ext-install mcrypt pdo_mysql mysqli mbstring

# Install nodejs and npm
RUN curl -sL https://deb.nodesource.com/setup_7.x | bash
RUN apt-get update && apt-get install -y nodejs build-essential

# Install zip and unzip
RUN apt-get install -y zip unzip

# Install composer via php
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"

# Make composer globally
RUN mv composer.phar /usr/local/bin/composer

# Install dependencies
COPY ./Laravel /var/www/Laravel
WORKDIR /var/www/Laravel
# CMD composer install
