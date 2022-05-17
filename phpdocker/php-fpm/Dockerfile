FROM thecodingmachine/php:8.0-v4-fpm-node14	

RUN sudo apt-get update;

ENV PHP_EXTENSION_INTL=1
ENV PHP_EXTENSION_IMAGICK=1
ENV PHP_EXTENSION_GD=1

WORKDIR "/application"

#RUN composer install
#RUN npm install
#RUN npm run build