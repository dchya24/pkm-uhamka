<?php

namespace App\Http\Middleware;

use App\Models\Informasi;
use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    public function handle($request, Closure $next, ...$guards)
    {
        $allGuards = ["mahasiswa", "penilai", "peninjau", "admin"];
        $guards = empty($guards) ?  $allGuards : $guards;
        $selectedGuard = "";

        foreach ($guards as $guard) {
            if (!Auth::guard($guard)->check()) {
                return redirect()->to('login');
            }
            else{
                $selectedGuard = $guard;
            }
        }

        if($selectedGuard != ""){
            if($selectedGuard == "penilai"){
                $selectedGuard = Auth::guard($selectedGuard)->user()->jenis_penilai  == 2 ? 'penilai_substansi' : 'penilai_administrasi';
            }
            else if($selectedGuard == "admin"){
                if(Auth::guard($selectedGuard)->user()->type == "warek"){
                    $selectedGuard = "warek";
                }
                else {

                    return $next($request);
                }
            }

            $informasi = Informasi::where('untuk_' . $selectedGuard, 1)->get();

            session()->put('session_informasi', $informasi);
  
        }



        return $next($request); 
    }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }
}
