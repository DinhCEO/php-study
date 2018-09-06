FROM bitnami/php-fpm:7.1
COPY . /app
RUN php composer.phar install --prefer-dist --no-plugins
