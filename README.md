# Migratio Laravel

Load migrations from subdirectories in Laravel.

## Install

```sh
composer create-project laravel/laravel:^10.0 vue-app
cd vue-app
composer require atomjoy/migratio
```

### Make migration

```sh
php artisan make:migration create_posts_table --path=/database/migrations/posts
```

### Migrate tables

```sh
# all subdirectories
php artisan migrate

# from single subdir
php artisan migrate --path=/database/migrations/posts
```

### Run app

```sh
php artisan serve --host=localhost --port=8000
```
