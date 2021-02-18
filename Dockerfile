FROM php:8-apache
RUN apt update && apt-get upgrade -y
RUN docker-php-ext-install pdo_mysql 
EXPOSE 80
