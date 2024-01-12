<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(): View {
        return view('login.index');
    }

    public function penilai(): View {
        return view("login.peninjau");
    }

    public function loginPenilai(Request $request){
        $loginType = $request->login_type;

        if($loginType == "penilai"){
            $credentials = [
                "username" => $request->username,
                "password" => $request->password
            ];

            if( Auth::guard('penilai')->attempt($credentials)){
                return redirect()->intended("/penilai/dashboard");
            }
            else {
                return redirect()->back()->with("error", "Username atau password salah");
            }
        }
        else if($loginType == "peninjau"){
            $credentials = [
                "username" => $request->username,
                "password" => $request->password
            ];

            if( Auth::guard('peninjau')->attempt($credentials)){
                return redirect()->intended("/peninjau/dashboard");
            }
            else {
                return redirect()->back()->with("error", "NIDN atau password salah");
            }
        }
    }
}
