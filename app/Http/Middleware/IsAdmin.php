<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

/**
 * @see Middleware https://laravel.com/docs/8.x/middleware
 */
class IsAdmin
{
    /**
     * @param  Request  $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->is_admin) {
            return $next($request);
        }
        abort(403);
    }
}
