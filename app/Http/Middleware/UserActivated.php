<?php

namespace App\Http\Middleware;

use Closure;

class UserActivated
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
        if (!$request->user()->is_admin) {
            if (!$request->user()->is_activated) {
                return redirect('/complete-registration');
            }
        }
        return $next($request);
    }
}
