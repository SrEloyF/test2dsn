#Imgagen de php
FROM php:8.1-apache

#instalar las dependencias necesarias para trabajar con postgresql
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && doctor-php-ext-install pdo pdo_pgsql pgsql

#copiamos todo el contenido del proyecto al contenedor php
COPY . /var/www/html/

#exponemos el puerto 80
EXPOSE 80