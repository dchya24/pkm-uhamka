<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $typeAdmin)
    {
        if (!auth()->guard('admin')->check()) {
            return redirect('/login');
        }
        else{
            $user = auth()->guard('admin')->user();

            if($user->type != $typeAdmin){
                return redirect('/login');
            }

        }

        return $next($request);
    }
}
