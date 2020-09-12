<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;
class VerfiyIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   /* public function handle($request, Closure $next)
    {
        if(!auth()->user()->isAdmin()){
            return redirect('home');
        }
        return $next($request);
    }
}
*/
public function handle($request, Closure $next)
{
    if(!auth()->user()->is_admin()){

        return redirect()->route('home');
    }
    return $next($request);
}

}