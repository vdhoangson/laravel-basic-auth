<?php
/**
 * Basic Authentication Middleware for Laravel
 *
 * @author vdhoangson <vdhoangson@gmail.com>
 * @link https://github.com/vdhoangson
 */
namespace Vdhoangson\LaravelBasicAuth;

use Illuminate\Support\ServiceProvider;
use Vdhoangson\LaravelBasicAuth\Middleware\BasicAuth;

class LaravelBasicAuthServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('basic-auth', function () {
            return new BasicAuth;
        });

        $this->mergeConfigFrom(
            __DIR__ . '/../config/laravel-basic-auth.php',
            'laravel-basic-auth'
        );
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/laravel-basic-auth.php' => config_path('laravel-basic-auth.php'),
        ], 'laravel-basic-auth-config');

        $this->app['router']->aliasMiddleware('basic-auth', BasicAuth::class);
    }
}
