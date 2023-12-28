<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(): View {
        return view('login.index');
    }


    public function mahasiswa(): View {
        return view("login.mahasiswa");
    }
    public function loginMahasiswa(Request $request){
        $credentials = $request->only(["nim", "password"]);
    }

    public function peninjau(): View {
        return view("login.peninjau");
    }

    public function administrator(): View {
        return view("login.administrator");
    }
}
