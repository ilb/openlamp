#!/bin/bash
set -e
cd ../vendor
docker build -t ilbru/openserver-core core
docker build -t ilbru/openserver-php php
mkdir database
cd database
mkdir mysql
cd ..
mkdir logs
cd logs
touch access_log
touch error_log
cd ../..
docker-compose up -d
