#!/bin/bash

cd /var/www/html

rm -rf *

curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar

mv wp-cli.phar /usr/local/bin/wp

wp core download --allow-root

mv /var/www/html/wp-config-sample.php /var/www/html/wp-config.php

wp config create --dbname=wordpress_db --dbuser=wp_user --dbpass=password --dbhost=mariadb --allow-root
wp core install --url=localhost --title=inception --admin_user=admin --admin_password=admin --admin_email=admin@example.com --allow-root
wp user create reg_user user@example.com --role=author --user_pass=password --allow-root

wp theme install astra --activate --allow-root

mkdir -p /run/php

sed -i 's/listen = \/run\/php\/php7.4-fpm.sock/listen = 9000/g' /etc/php/7.4/fpm/pool.d/www.conf

/usr/sbin/php-fpm7.4 -F