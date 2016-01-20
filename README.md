# lumen-make
A package built for lumen that ports most of the make commands from laravel.
For lumen v5.1, but will most likely work for 5.2 as well. I haven't tested.
If you have requests, let me know, or do it yourself and make a pull request

## Installation

Just run the following in the root of your project
```shell
> composer require michaelb/lumen-make
```

```php
// In bootstrap/app.php

/*
|--------------------------------------------------------------------------
| Register Service Providers
|--------------------------------------------------------------------------
|
| Here we will register all of the application's service providers which
| are used to bind services into the container. Service providers are
| totally optional, so you are not required to uncomment this line.
|
*/

//$app->register(App\Providers\AppServiceProvider::class);
$app->register(App\Providers\EventServiceProvider::class);
$app->register(MichaelB\LumenMake\LumenMakeServiceProvider::class); // <- Add this
```

```php
// Optionally, if you don't want it to affect load times in production,
// you can load it conditionally

if (env('APP_ENV') != 'production' || env('APP_ENV') == 'local') {
    $app->register(MichaelB\LumenMake\LumenMakeServiceProvider::class);
}
```

#### Commands
* `make:job {name}` - Makes a new job class in Jobs/
* `make:console {name}` - Makes a new console command in Console/Commands/
* `make:controller {name}` - Makes a new restful controller in Http/Controllers/
* `make:model {name}` - Makes a new model in /
* `make:middleware {name}` - Makes a new middleware class in Http/Middleware/
* `make:exception {name}` - Makes a new exception class in Exceptions/

