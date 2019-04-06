<?php

namespace App\Http\Middleware;

use Closure;

class ApplicationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard="application")
    {

        if(!auth()->guard($guard)->check()) {
            return redirect(route('admission.login'));
        }
        return $next($request);
    }
}
