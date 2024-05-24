#!/bin/bash

git fetch
git stash
git pull
composer install
npm install
npm run build
php artisan optimize
php artisan view:clear
php artisan migrate --force
php artisan db:seed --force
exit
