#!/usr/bin/env
cd /www/php_self
git checkout .
git pull origin master
chmod 777 -R /www
time=$(date "+%Y-%m-%d %H:%M:%S")
echo "${time}"
