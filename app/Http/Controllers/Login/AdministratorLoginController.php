<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdministratorLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = "administrator/dashboard";

    public function __construct()
    {
        $this->middleware("guest:admin")->except("logout");
    }

    public function username(){
        return "username";
    }

    protected function guard(){
        return Auth::guard('admin');
    }

    public function administrator(): View {
        return view("login.administrator");
    }

}
