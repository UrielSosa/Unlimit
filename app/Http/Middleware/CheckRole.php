<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    // public function handle($request, Closure $next, $role)
    // {
    //     if (! $request->user()->hasRole($role)) {
    //         return redirect('home');
    //     }
    //     return $next($request);
    // }

    public function handle($request, Closure $next)
    {
        if ($request->user()->rol == 9) {
          return $next($request);
        } else {
          return redirect('/productos');
        }
    }
}
