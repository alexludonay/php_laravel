<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $auth;
    public function __construct(Guard $guard)
    {
        $this->auth = $guard;        
    }

    public function handle($request, Closure $next, ...$autz)
    {
        if(Auth::check() && $this->auth->user()->isAdmin())
        {
            return $next($request);
        }
       
        return redirect('/')->with("danger","Vous n'êtes pas connecté ou n'avez pas les droits");
    }
}

//$this->auth->user()->hasAuth($az)
