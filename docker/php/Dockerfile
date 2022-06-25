FROM php:8.1-fpm

ARG UID=1000
ARG GID=1000
ENV USERNAME=www-data

RUN apt-get update && apt-get install -y \
    zip \
    unzip

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN usermod -u $UID $USERNAME \
    && groupmod -g $GID $USERNAME \
    && mkdir -p /home/$USERNAME \
    && chown -R $USERNAME:$USERNAME /home/$USERNAME \
    && chown -R $USERNAME:$USERNAME /usr/src


WORKDIR /usr/src

USER $USERNAME
