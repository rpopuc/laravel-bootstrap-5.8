
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

After config, to start the Laravel application, execute:

```
./bin/up
```

## Helper scripts

The `./bin` folder has several helper scripts.

### artisan

- Run a artisan command
    ```
    ./bin/artisan list
    ```

### composer-install

- Install all composer dependencies
    ```
    ./bin/composer-install
    ```

### composer-require

- Require a list of packages from composer
    ```
    ./bin/composer-require laravel/passport laravel/horizon
    ```

### composer-update

- Update composer packages
    ```
    ./bin/composer-update
    ```

### config

- Config the application environment
    ```
    ./bin/config
    ```

### config-storage

- Configure access rights to storage path
    ```
    ./bin/config-storage
    ```

### down

- Stop the application environment
    ```
    ./bin/down
    ```

- Stop the application environment and kill orphans containers
    ```
    ./bin/down --remove-orphans
    ```

### exec

- Execute a command inside a container
    ```
    ./bin/exec workspace bash
    ```

    ```
    ./bin/exec php-fpm sh
    ```

### logs

- Show all logs of containers
    ```
    ./bin/logs
    ```

- Show logs from a specific container
    ```
    ./bin/logs php-fpm
    ```

### migrate

- Execute database migrations
    ```
    ./bin/migrate
    ```

### migrate-and-seed

- Execute database migrations and seeders
    ```
    ./bin/migrate-and-seed
    ```

### npm-dev

- Run a npm transpilation for a dev environment
    ```
    ./bin/npm-dev
    ```

### npm-install

- Install node dependencies
    ```
    ./bin/npm-install
    ```

- Install a list of node dependencies
    ```
    ./bin/npm-install moment axios
    ```

### npm-prod

- Run a npm transpilation for a production environment
    ```
    ./bin/npm-prod
    ```

### npm-watch

- Wath files modifications to run a npm transpilation for a dev environment
    ```
    ./bin/npm-watch
    ```

### ps

- Show status from all containers
    ```
    ./bin/ps
    ```

### restart

- Restart the application environment
    ```
    ./bin/restart
    ```

### run-dusk-tests

- Execute dusk tests
    ```
    ./bin/run-dusk-tests
    ```

- Execute dusk tests with filter
    ```
    ./bin/run-dusk-tests --filter test_if_runs
    ```

- Execute dusk tests for a group
    ```
    ./bin/run-dusk-tests --group crud
    ```

### run-tests

- Execute all PHPUnit tests
    ```
    ./bin/run-tests
    ```

- Execute tests with filter
    ```
    ./bin/run-tests --filter test_if_runs
    ```

- Execute tests for a group
    ```
    ./bin/run-tests --group crud
    ```

### sql

- Enter into Postgres console
    ```
    ./bin/sql
    ```

- Execute a sql query
    ```
    ./bin/sql "select * from users"
    ```

### up

- Start the application environment
    ```
    ./bin/up
    ```

- Start the a list of containers
    ```
    ./bin/up workspace database
    ```

### version

- Show the versions from Laravel, Node, NPM and Postgres
    ```
    ./bin/version
    ```

### workspace

- Enter into workspace container with Laradock user
    ```
    ./bin/workspace
    ```

- Enter into workspace container with root user
    ```
    ./bin/workspace root
    ```
