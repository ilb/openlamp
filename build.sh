#!/bin/bash
set -e
docker build -t ilbru/openlamp-core core
docker build -t ilbru/openlamp-php php