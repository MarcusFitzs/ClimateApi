<?php
# @Date:   2019-12-02T14:06:40+00:00
# @Last modified time: 2019-12-02T14:08:47+00:00




namespace App\Http\Middleware;

use Closure;

class AuthRole
{

     // Handle an incoming request.
    public function handle($request, Closure $next, String $role)
    {
        if (!$request->user() || !$request->user()->hasRole($role)){
          return redirect()->route('home');
        }
        return $next($request);
    }
}
