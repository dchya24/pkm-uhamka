<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeninjauLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = "peninjau/dashboard";

    public function __construct()
    {
        $this->middleware("guest:peninjau")->except("logout");
    }

    public function username(){
        return "username";
    }

    protected function guard(){
        return Auth::guard('peninjau');
    }

    public function postLogin($credentials){
        $attempt = $this->guard()->attempt($credentials);
        
        if($attempt){
            return redirect('reviewer.dashboard');
        }
        
        return redirect()->back();
    }

    // protected function credentials(Request $request)
    // {
    //     $credentials = [
    //         "username" => $request->username,
    //         "password" => $request->password
    //     ];

    //     return $credentials;
    // }

}
