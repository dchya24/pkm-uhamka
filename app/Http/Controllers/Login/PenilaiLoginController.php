<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class PenilaiLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = "penilai/dashboard";

    public function __construct()
    {
        $this->middleware("web")->except("logout");
    }

    public function username(){
        return "username";
    }

    protected function guard(){
        return Auth::guard('penilai');
    }

    public static function loginv2($request){
        $credentials = [
            "username" => $request->username,
            "password" => $request->password
        ];

        if( Auth::guard('penilai')->attempt($credentials)){
            $user = Auth::guard('penilai')->user();
            $route = "";

            if($user->jenis_penilai == 2){
                $route = "/penilai-substansi/dashboard";
                return redirect()->itended($route);
            }
            else if($user->jenis_penilai == 1){
                $route = "/penilai-administrasi/dashboard";
                return redirect()->itended($route);
            }
        }

        return view("login.peninjau")->with("error", "Username atau password salah");
    }
}
