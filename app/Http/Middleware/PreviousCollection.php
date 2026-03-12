<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PreviousCollection
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

         if(Session()->has('previous_url')){
            $previouspage = session('previous_url');
            Session()->forgot('previous_url');
            return redirect()->to($previouspage);
         }else{
          
         }
        return $next($request);
    }
}
