FROM php:7.4-fpm

RUN apt-get update -y\
&& apt -y install php-{mbstring,gd,curl,cli,cgi,bcmath,mcrypt,sqlite3,xml,commond,zip,json,mysql}