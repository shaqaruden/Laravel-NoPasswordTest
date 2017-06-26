To use this project 

## Clone repository and run
    composer update --no-scripts

## Copy and edit .env file
    cp .env.example .env

## Generate App Key
    php artisan key:generate

## Setup Database
    touch database/database.sqlite

## Create a user
    php artisan tinker
    
1. Create a Random user (In Tinker)
    factory(App\User::class)->create();

2. Create a specific user (In Tinker)
    $user = new App\User();
    $user->name = '<Users Name>';
    $user->number = '<Users Number>;
    $user->save();