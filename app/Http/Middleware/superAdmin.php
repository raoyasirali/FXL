<?php

namespace App\Http\Middleware;

use Closure;
use Cookie;

class superAdmin
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
         $value = Cookie::get('aemail');
        if(empty($value)){
            echo "Email not found";
            return redirect('a_login');
        }
        // echo "Checking middleware";
                return $next($request);
    }
}
