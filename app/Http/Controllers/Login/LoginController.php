<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected function checkAuth(){
        if(
            Auth::guard('penilai')->check() ||
            Auth::guard('peninjau')->check() ||
            Auth::guard('mahasiswa')->check()
        ){
            dd("Has login");
        };
    }

    public function index(): View {
        $this->checkAuth();
        return view('login.index');
    }

    public function penilai(): View {
        return view("login.peninjau");
    }

    public function loginPenilai(Request $request){
        $loginType = $request->login_type;

        if($loginType == "penilai"){
            $penilaiLoginController = new PenilaiLoginController();

            $penilaiLoginController->login($request);
        }
        else if($loginType == "peninjau"){
            $peninjauLoginController = new PeninjauLoginController();

            $credentials = [
                "nidn" => $request->username,
                "password" => $request->password
            ];

            $peninjauLoginController->login($request);
        }
    }

    public function administrator(): View {
        return view("login.administrator");
    }
}
