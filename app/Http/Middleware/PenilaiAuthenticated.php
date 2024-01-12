<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PenilaiAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $jenisPenilai)
    {
        if (!auth()->guard('penilai')->check()) {
            return redirect('/login');
        }
        else{
            $jenis_penilai = [
                1 => "administrasi",
                2 => "substansi"
            ];

            $user = auth()->guard('penilai')->user();

            $userRole = $jenis_penilai[$user->jenis_penilai];

            if($userRole != $jenisPenilai){
                return redirect('/login');
            }

        }

        return $next($request);
    }
}
