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
        $this->middleware("guest:penilai")->except("logout");
    }

    public function username(){
        return "username";
    }

    protected function guard(){
        return Auth::guard('penilai');
    }

    public function login($request){
        $credentials = [
            "username" => $request->username,
            "password" => $request->password
        ];

        if(Auth::guard('penilai')->attempt($credentials)){
            $user = Auth::guard('penilai')->user();
            $route = "";

            if($user->jenis_penilai == 2){
                $route = "penilai-substansi.dashboard";
            }
            else if($user->jenis_penilai == 1){
                $route = "penilai-administrasi.dashboard";
            }

            return redirect()->route($route);
        }

        return redirect()->back()->withInput($request->only('username', 'remember'));
    }
}
