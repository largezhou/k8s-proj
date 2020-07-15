FROM composer:2.0 as build

WORKDIR /app
COPY ./ ./

RUN composer install \
        --ignore-platform-reqs \
        --no-interaction \
        --no-plugins \
        --no-scripts \
        --prefer-dist

FROM php:7.4-fpm-alpine3.12 as fpm

WORKDIR /app
COPY --from=build /app/vendor/ ./vendor
COPY ./ ./

RUN chmod -R 777 storage \
    && php artisan package:discover \
    && php artisan route:cache \
    && php artisan config:cache
