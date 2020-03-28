#!/usr/bin/env bash

echo "Starting Docker..."

export MSYS_NO_PATHCONV=1;
docker-compose up --build -d

echo "Installing composer..."
docker exec my_php bash -c "cd ../my-app && composer install && composer dump-autoload"