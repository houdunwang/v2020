#!/bin/bash 
service cron start
service mysql start
service php7.2-fpm start
nginx -g 'daemon off;'