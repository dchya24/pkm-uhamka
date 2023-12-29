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

}
