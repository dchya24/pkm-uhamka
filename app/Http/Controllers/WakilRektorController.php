<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WakilRektorController extends Controller
{
    public function index(){
        return view("wakil-rektor.dashboard");
    }

    public function informasi(){
        return view("wakil-rektor.informasi");
    }

    public function penilaian(){
        return view("wakil-rektor.penilaian-proposal");
    }

    public function profile(){
        return view("wakil-rektor.profile");
    }
}
