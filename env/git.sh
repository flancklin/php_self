#!/usr/bin/env bash
chmod -R 777 /var/www/html/php_frame
cd /var/www/html/php_frame
git checkout .
git clean -df
git pull origin master
