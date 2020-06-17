<?php

namespace App\Http\Middleware;

use Closure;

class Waiter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth("user")->user()->role != 'waiter') {
            abort(403, trans('auth.permission'));
        }

        return $next($request);
    }
}
