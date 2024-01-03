<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class WakilRektorController extends Controller
{
    public function index(){
        return view("wakil-rektor.dashboard");
    }

    public function informasi(){
        $informasi = Informasi::where('untuk_warek', true)->get();

        return view("wakil-rektor.informasi", compact('informasi'));
    }

    public function penilaian(){
        return view("wakil-rektor.penilaian-proposal");
    }

    public function profile(){
        return view("wakil-rektor.profile");
    }
}
