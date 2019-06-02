<?php

namespace App\Http\Middleware;
session_start();
use Closure;
use Auth;
class Admin
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
        //$user = Auth::user();
        //dd($user);
        if (!isset($_SESSION['userinfo2']))
        {
            return redirect('/');
        }
        elseif(Auth::user()->role == 1)
        {
            return $next($request);
        }
        else
        return redirect('/hak');
    }
}
