<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{

    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }
        else{
            $user = Auth::user();
            if ($user->Admin == true){
                return $next($request);
            }
            else{
                return redirect('/login');
            }
        }
        return $next($request);
    }
}
