To use this project 

1. clone repository and run
    composer update --no-scripts

2. Copy and edit .env file
    cp .env.example .env

3. Generate App Key
    php artisan key:generate

4. Setup Database
    touch database/database.sqlite

5. Create a user
    php artisan tinker
    
    5a. Create a Random user
        factory(App\User::class)->create();
    5b. Create a specific user
        $user = new App\User();
        $user->name = '<Users Name>';
        $user->number = '<Users Number>;
        $user->save();