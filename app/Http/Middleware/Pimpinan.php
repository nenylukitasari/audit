<?php

namespace App\Http\Middleware;
session_start();
use Closure;
use Auth;

class Pimpinan
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
        if (!isset($_SESSION['user_id']))
        {
            return redirect('/');
        }
        elseif(Auth::user()->role == 2)
        {
            return $next($request);
        }
        else
        return redirect('/hak');
    }
}
