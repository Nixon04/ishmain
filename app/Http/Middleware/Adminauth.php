<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class Adminauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Session()->has('members_id')){
           return redirect('/ishumanity/auth/login');
        }else if(Session()->has('previous_url')){
            $previouspage = session('previous_url');
            Session()->pull('previous_url');
            return redirect()->to($previouspage); 
        }
        return $next($request);
    }
}
