<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class MahasiswaLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = "mahasiswa/dashboard";

    public function __construct()
    {
        $this->middleware("guest:mahasiswa")->except("logout");
    }

    public function mahasiswa(): View {
        return view("login.mahasiswa");
    }

    public function username(){
        return "nim";
    }

    protected function guard(){
        return Auth::guard('mahasiswa');
    }

}
