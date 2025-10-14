FROM php:8.3-cli

RUN apt-get -y update \
  && apt-get install -y libicu-dev libgmp-dev\
  && apt-get install -y locales \
  && docker-php-ext-configure intl \
  && docker-php-ext-configure bcmath \
  && docker-php-ext-configure gmp \
  && docker-php-ext-install intl \
  && docker-php-ext-install bcmath \
  && docker-php-ext-install gmp \
  && docker-php-ext-install pdo_mysql

COPY conf/locale.gen /etc/locale.gen

RUN locale-gen
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
