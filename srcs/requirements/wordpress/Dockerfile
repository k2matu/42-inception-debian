FROM debian:11

RUN apt update && apt upgrade -y && apt install -y \
    php7.4-fpm \
    php-mysqli \
    curl

COPY conf/www.conf /etc/php/7.4/fpm/pool.d/.
COPY tools/script.sh .

RUN chmod +x script.sh

CMD ["./script.sh"]