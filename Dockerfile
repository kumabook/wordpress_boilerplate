FROM php:apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN apt-get update
RUN apt-get install -y sudo less mysql-client
RUN rm -rf /var/lib/apt/lists/*
RUN curl -o /bin/wp-cli.phar https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x /bin/wp-cli.phar
RUN mv /bin/wp-cli.phar /usr/local/bin/wp

RUN mkdir -p /scripts
COPY ./bin/cli /bin/cli
WORKDIR /bin/

RUN a2enmod rewrite
