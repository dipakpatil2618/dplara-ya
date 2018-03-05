#!/bin/bash
echo "Run laravel stuff after pull"
composer install
composer dumpautoload
php artisan config:clear
php artisan migrate
php artisan vendor:publish
