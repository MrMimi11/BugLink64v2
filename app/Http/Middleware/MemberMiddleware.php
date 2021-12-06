<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

/**
 * @see Middleware https://laravel.com/docs/8.x/middleware
 */
class MemberMiddleware
{
    /**
     * @param  Request  $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->is_banned) {
            abort(403);
        }
        return $next($request);
    }
}
