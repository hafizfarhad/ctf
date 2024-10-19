FROM php:8.0-apache

RUN apt-get update && apt-get install -y git

RUN a2enmod rewrite

RUN echo "flag{fake}" > /flag_`head /dev/urandom | tr -dc A-Za-z0-9 | head -c 32 ; echo`.txt

COPY src /var/www/html/

EXPOSE 80/tcp
