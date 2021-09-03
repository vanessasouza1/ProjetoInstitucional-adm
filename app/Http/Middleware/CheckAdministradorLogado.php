<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdministradorLogado
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
        if(Auth::user()->administrador != null) {
            return redirect()->route('\membroAdm');
        }
        return $next($request);
    }
}
