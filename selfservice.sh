#!/bin/bash

pwd > tt

touch a 

docker-compose up -d

touch b

apt install -y mariadb-client-core-10.0 > ab

touch c

mysql -uroot -proot -h127.0.0.1 database < "/METROM/Demo_Wordpress/backup/database.sql"

touch d
