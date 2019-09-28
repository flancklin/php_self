#!/bin/bash
cd /www/php_self
git checkout .
git pull origin master
chmod 777 -R /www

cd /www/php_down
git checkout .
git pull origin master

cd /www/php_source
git checkout .
git pull origin master

cd /www/html
git checkout .
git pull origin master

