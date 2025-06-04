<?php
/**
 * Basic Authentication Middleware for Laravel
 *
 * @author vdhoangson <vdhoangson@gmail.com>
 * @link https://github.com/vdhoangson
 */
namespace Vdhoangson\LaravelBasicAuth\Middleware;

use Closure;
use Illuminate\Http\Request;

class BasicAuth
{
    public function handle(Request $request, Closure $next)
    {
        $username = config('laravel-basic-auth.username');
        $password = config('laravel-basic-auth.password');

        header('Cache-Control: no-cache, must-revalidate, max-age=0');

        if ($request->getUser() === $username && $request->getPassword() === $password) {
            return $next($request);
        }

        return response('Unauthorized', 401, [
            'WWW-Authenticate' => 'Basic realm="' . config('laravel-basic-auth.realm') . '"',
        ]);
    }
}
