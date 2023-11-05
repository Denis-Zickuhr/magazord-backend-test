FROM php:8.1.0-apache

# RUN docker-php-ext-install pdo_mysql && docker-php-ext-enable pdo_mysql
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Install mod_rewrite
RUN apt-get update && apt-get upgrade -y
RUN apt-get install sudo
RUN sudo a2enmod rewrite
RUN service apache2 restart

COPY apache2.conf /etc/apache2/