To use this project 

## Clone repository and run
    composer update --no-scripts

## Copy .env file
    cp .env.example

## Generate App Key
    php artisan key:generate

## Change Database to sqlite
    DB_CONNECTION=sqlite

## Setup Database
    touch database/database.sqlite

## Create a random user
    php artisan tinker
    factory(App\User::class)->create();

## Create a specific user
    php artisan tinker
    $user = new App\User();
    $user->name = '<Users Name>';
    $user->number = '<Users Number>;
    $user->save();