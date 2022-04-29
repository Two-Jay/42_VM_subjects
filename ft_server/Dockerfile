FROM debian:buster

LABEL author jekim

RUN apt-get update && \
    apt-get install -y nginx \
                        curl \
                        openssl \
                        php-fpm \
                        mariadb-server \
                        php-mysql \
                        php-mbstring \
                        wget 

COPY	./srcs/setup.sh ./
COPY	./srcs/default.config ./tmp
COPY	./srcs/wp-config.php ./tmp
COPY	./srcs/config.inc.php ./tmp

EXPOSE 80 443

CMD bash setup.sh