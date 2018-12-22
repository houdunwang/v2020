<?php

namespace App\Http\Middleware;

use Closure;

class CheckMailMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (\Auth::check() && \Auth::user()->email_valid == 0) {
            return redirect()->route('user.show_token');
        }
        return $next($request);
    }
}
