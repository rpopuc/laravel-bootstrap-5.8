
# Bootstrap Laravel 5.8 Application

Base repository for a Laravel 5.8 application over docker compose.

Contains all needed files to mount a environment over docker with the following applications:

- php-fpm
- nginx
- postgres
- redis
- laravel-echo
- workspace:
    - nodejs
    - composer
    - laravel

Based on Laradock project, release v5.5.4.

## How to config and run

To config the project, execute:

```
./bin/config
```

Before installation, to start the Laravel application, execute:

```
./bin/up
```

The `./bin` folder has several utility scripts, like:

- ./bin/up - To start application environment
- ./bin/down - To stop application
- ./bin/artisan - Run a artisan command
- ./bin/workspace - To enter into workspace container with Laradock user
- ./bin/sql - To enter into Postgres console

