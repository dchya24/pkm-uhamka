<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PenilaiLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = "/penilai/dashboard";

    public function __construct()
    {
        $this->middleware("guest:penilai")->except("logout");
    }

    public function username(){
        return "username";
    }

    protected function guard(){
        return Auth::guard('penilai');
    }

    public static function login($request){
        $credentials = [
            "username" => $request->username,
            "password" => $request->password
        ];

        if( Auth::guard('penilai')->attempt($credentials)){
            // $user = Auth::guard('penilai')->user();
            $route = "";

            return redirect()->intended("/penilai/dashboard");
            // if($user->jenis_penilai == 2){
            //     $route = "/penilai-substansi/dashboard";
            //     return redirect()->intended($route);
            // }
            // else if($user->jenis_penilai == 1){
            //     $route = "/penilai-administrasi/dashboard";
            //     return redirect()->intended($route);
            // }
        }

        return view("login.peninjau")->with("error", "Username atau password salah");
    }

    public function logout(Request $request){
        Auth::guard('penilai')->logout();
        return redirect('/login');
    }
}
