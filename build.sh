#!/bin/bash
set -e
docker build -t ilbru/openserver-core core
docker build -t ilbru/openserver-php php