#!/usr/bin/env bash
cd /var/www/html/php_frame
git checkout .
git clean -df
git pull origin master
