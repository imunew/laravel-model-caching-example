# laravel-model-caching-example
This application is an example with [laravel-model-caching](https://github.com/GeneaLabs/laravel-model-caching).
It has the following features.

- Laravel Version: v6.5
- Database Driver: sqlite
- Model Cache Store: apc

## Setup

1. `cp .env.example .env`
1. `docker-compose up -d --build`
1. `docker-compose exec php-fpm composer install`
