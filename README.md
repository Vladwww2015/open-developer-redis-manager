Redis manager for open-developer

## Screenshot

![extension-redis-manager](https://user-images.githubusercontent.com/86517067/176555243-be034c34-92b4-4b60-8f32-89dd0432be64.png)


## Installation

```
composer require open-developer-ext/redis-manager
```

```
php artisan developer:import redis-manager
```
Open `http://your-host/developer/redis` in your browser.

## Debugging
When error: `Class "Redis" not found` try changing to predis instead.

in `config/database.php` or .env set REDIS_CLIENT to 'predis';
```php
   'client' => env('REDIS_CLIENT', 'predis'),
```
