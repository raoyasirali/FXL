<?php

namespace App\Http\Middleware;

use Closure;
use Cookie;
class businessAdmin
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
         $value = Cookie::get('email');
        if(empty($value)){
            echo "Email not found";
            return redirect('b_login');
        }
        // echo "Checking middleware";
                return $next($request);
        
    }
}
