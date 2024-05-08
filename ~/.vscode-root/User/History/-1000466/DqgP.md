composer create-project laravel/laravel:^8.0 laravel8-api-auth-jwt
composer require laravel/sanctum
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
