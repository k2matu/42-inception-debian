FROM debian:11

RUN apt update && apt upgrade -y && apt install -y \
    mariadb-server \
    gettext-base

COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/.
COPY tools/init.sql /etc/mysql/init.sql.template
COPY tools/script.sh /script.sh
COPY tools/entrypoint.sh /entrypoint.sh

RUN mkdir /run/mysqld && chmod +x /script.sh /entrypoint.sh

ENTRYPOINT ["./entrypoint.sh"]