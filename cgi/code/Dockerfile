FROM composer:2.0

WORKDIR /code
COPY ./ ./

RUN composer install \
        --ignore-platform-reqs \
        --no-interaction \
        --no-plugins \
        --no-scripts \
        --prefer-dist

RUN php artisan package:discover \
    && php artisan route:cache
