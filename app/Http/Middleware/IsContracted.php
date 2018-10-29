<?php

namespace App\Http\Middleware;

use Closure;

class IsContracted
{
    /**To ensure that users dont fill in the contract form twice.
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->user()->iscontracted){
        return back();
        }
        return $next($request);
    }
}
