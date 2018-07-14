<?php

namespace App\Http\Middleware;

use Closure;

class checkName
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
        if($request->txtUserName !== "admin")
        {
        
            return redirect('/register'); // middleware này chỉ để test
        }
        return $next($request);

    }
}
