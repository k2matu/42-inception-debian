#!/bin/bash

mkdir /var/www/
mkdir /var/www/html

cd /var/www/html

rm -rf *

curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar

./wp-cli.phar core download --allow-root

./wp-cli.phar config create --dbname=wordpress_db --dbuser=wp_user --dbpass=password --dbhost=mariadb --allow-root

./wp-cli.phar core install --url=localhost --title=inception --admin_user=admin --admin_password=admin --admin_email=admin@admin.com --allow-root
./wp-cli.phar user create reg_user user@example.com --role=author --user_pass=password --allow-root

mkdir -p /run/php

php-fpm7.4 -F