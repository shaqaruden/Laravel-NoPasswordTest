To use this project 

1. clone repository and run
    composer update --no-scripts

2. Edit your .env file

3. Setup Database
    touch database/database.sqlite

4. Create a user
    php artisan tinker
    
    4a Create a Random user
        factory(App\User::class)->create();
    4b Create a specific user
        $user = new App\User();
        $user->name = '<Users Name>';
        $user->number = '<Users Number>;
        $user->save();