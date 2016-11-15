<?php

namespace App\Http\Middleware;

use Closure;

class MyMiddleware
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
      //ejemplo para saber si alguien es menor a 18
      if($request->input('age')<18){
        return redirect('home');
      }
        return $next($request);
    }
}
