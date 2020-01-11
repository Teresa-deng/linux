#!/bin/bash
ip=$(ifconfig ens32|awk -F '[ :]+' 'NR==2 {print $3}')
sed -i '23s/nobody/nginx/' /usr/local/php7/etc/php-fpm.d/www.conf.default
sed -i '24s/nobody/nginx/' /usr/local/php7/etc/php-fpm.d/www.conf.default
sed -i  "36s/127.0.0.1/$ip/" /usr/local/php7/etc/php-fpm.d/www.conf.default
sed -i  "37s/127.0.0.1/$ip/" /usr/local/php7/etc/php-fpm.d/www.conf.default

