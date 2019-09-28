#!/usr/bin/env bash
cd /www/php_self
git checkout .
git pull origin master
time=$(date "+%Y-%m-%d %H:%M:%S")
echo "${time}"
