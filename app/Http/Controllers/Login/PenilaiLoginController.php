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

        $attempt = Auth::guard('penilai')->attempt($credentials);

        if($attempt){
            $user = Auth::guard('penilai')->user();
            $route = "";

            if($user->jenis_penilai == 2){
                $route = "penilai-substansi/dashboard";
                return redirect()->to($route);
            }
            else if($user->jenis_penilai == 1){
                $route = "penilai-administrasi/dashboard";
                return redirect()->to($route);
            }

        }

        return redirect()->back()->withInput($request->only('username', 'remember'));
    }
}
