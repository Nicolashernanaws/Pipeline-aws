FROM php:7.4-apache

COPY index.php /var/www/html/

ENV SERVER_ID=1

EXPOSE 80



