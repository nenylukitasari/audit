<?php

namespace App\Http\Middleware;
session_start();
use Closure;
use Auth;

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
        $user = Auth::user();
        //dd($user);
         if (!isset($_SESSION['user_id']))
        {
            return redirect('/');
        }
        elseif(isset($_SESSION['user_id']))
        {
            return $next($request);
        }
        else
        return redirect('/hak');
    }
}
