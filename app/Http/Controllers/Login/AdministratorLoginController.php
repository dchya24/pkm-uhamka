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

    public function login(Request $request){
        $credentials = [
            "username" => $request->username,
            "password" => $request->password
        ];

        if(Auth::guard('admin')->attempt($credentials)){
            $user = Auth::guard('admin')->user();
            $route = "";

            if($user->type == "admin"){
                $route = "admin.dashboard";
            }
            else if($user->type == 'warek'){
                $route = "wakil-rektor.dashboard";
            }

            return redirect()->route($route);
        }

        return redirect()->back()->with("error", "Username atau password salah");
    }

}
