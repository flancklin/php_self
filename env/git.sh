#!/usr/bin/env bash
cd /www/html
git pull origin master
cd /www/php_self
git pull origin master
cd /www/php_down
git pull origin master
cd /www/php_source
git pull origin master

time=$(date "+%Y-%m-%d %H:%M:%S")
echo "${time}"
