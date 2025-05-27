# Laravel Basic Auth

![GitHub tag (latest by date)](https://img.shields.io/github/tag-date/vdhoangson/laravel-basic-auth?label=Version)
![GitHub](https://img.shields.io/github/license/vdhoangson/laravel-basic-auth?label=License)
![Packagist](https://img.shields.io/packagist/dt/vdhoangson/laravel-basic-auth?label=Downloads)

## Installation

You can install this package by composer:

```
composer require vdhoangson/laravel-basic-auth
```

### Implementation

Use this in routes/web.php

```php
Route::middleware(['basic-auth'])->group(function () {
    //All the routes are placed in here
    Route::get('/home', 'DashboardController@dashboard');
});
```

OR

```php
Route::get('/home', 'DashboardController@dashboard')->middleware('basic-auth');
```

# Configures

```
BASIC_AUTH_USERNAME=
BASIC_AUTH_PASSWORD=
BASIC_AUTH_REALM=
```
