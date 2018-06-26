#!/bin/bash

apt install -y mariadb-client-core-10.0

mysql -uroot -proot -h127.0.0.1 database < ./backup/database.sql

docker-compose up -d
