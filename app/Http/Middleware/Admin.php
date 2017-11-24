<?php

namespace App\Http\Middleware;
use Illuminate\contracts\Auth\Guard;
use Closure;
use Session;

class Admin
{

    protected $auth;
    public function __construct(Guard $auth){
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this ->auth->user()->Tipo != 1) {
          
            return redirect()->to('Admin');
        }

        return $next($request);
    }
}
