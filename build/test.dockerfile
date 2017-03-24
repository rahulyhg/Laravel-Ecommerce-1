FROM php:latest

MAINTAINER Nhieu Nguyen

RUN apt-get update && \
	apt-get install curl && \
	curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
	curl -sL https://deb.nodesource.com/setup_7.x && \
	apt-get -y install nodejs && \
	apt-get -y install build-essential

ENV NODE_ENV=dev
ENV PORT=8000

COPY . /var/www
WORKDIR /var/www

RUN composer install

EXPOSE $PORT
