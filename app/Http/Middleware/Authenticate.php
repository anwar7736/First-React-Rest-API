<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Factory as Auth;

class Authenticate
{
  
    protected $auth;

   
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next, $guard = null)
    {
        return $next($request)
               ->header('Access-Control-Allow-Origin', '*')
               ->header('Access-Control-Allow-Methods', '*');
              
    }
}
