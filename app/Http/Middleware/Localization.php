<?php

namespace App\Http\Middleware;

use App;
use Closure;
use Illuminate\Http\Request;
use Session;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Session::has('locale')) {
            App::setlocale(Session::get('locale'));
        } else {
            Session::put('locale', 'en');
        }
        return $next($request);
    }
}
