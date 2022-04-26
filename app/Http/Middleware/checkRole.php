<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use Illuminate\Http\Request;

class checkRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        if (Auth::guard('web')->check()== true) {

            foreach ($guards as $guard) {
                if (Auth::guard('web')->user()->role==$guard) {
                    return $next($request);
                }
            }
            return redirect('/notallowed');

           
        }else{
            return redirect('/notallowed');

        }

    }

}
