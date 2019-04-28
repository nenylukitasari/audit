<?php

namespace App\Http\Middleware;
session_start();
use Closure;

class SemuaRole
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
         if (!isset($_SESSION['userinfo2']))
        {
            return redirect('/');
        }
        elseif(isset($_SESSION['userinfo2']))
        {
            return $next($request);
        }
        else
        return redirect('/hak');
    }
}
