<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $level=array_slice(func_get_args(), 2);
        if (!(Auth::check()) && Auth::user()->level==3) {
            return route('login.admin')->with('msg','Username atau password salah!');
        }
        else{
            $authen=Auth::user();
            foreach($level as $level){
                if ($authen->level==$level) {
                    return $next($request);
                }
            }
        }
        Auth::logout();
        return redirect('login-admin')->with('msg','Akun tidak memiliki izin akses!');
        
    }
}
