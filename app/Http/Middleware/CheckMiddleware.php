<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        if($response instanceof \Illuminate\Http\Response){
            $content = $response->getContent();
        if(Auth::check()){
            $content = str_replace('<div><a href="/signin" class="text-white">SignIn</a></div>', '<div><a href="/profile" class="text-white">Profile</a></div>', $content);
            
        }       
        $response->setContent($content);

     }
        return $response;
    }
}
