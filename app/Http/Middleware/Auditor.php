<?php

namespace App\Http\Middleware;
session_start();
use Closure;

class Auditor
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
        elseif($_SESSION['userinfo2'] != "azkayasin2@gmail.com" && $_SESSION['userinfo2'] != "nenylukitasari@gmail.com")
        {
            return $next($request);
        }
        else
        return redirect('/hak');
    }
}
