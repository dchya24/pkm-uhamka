<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $userInfo = Auth::user();

        return view("mahasiswa.dashboard", compact('userInfo'));
    }

    public function informasi(){
        $informasi = Informasi::where('untuk_mahasiswa', true)->get();

        // TODO Testing feature
        return view("mahasiswa.informasi", compact("informasi"));
    }

    public function sertifikat(){
        // TODO sertifikat
        return view("mahasiswa.sertifikat");
    }

    public function profile(){
        // TODO Profile
        return view("mahasiswa.profile");
    }

    public function updateProfie(Request $request){
        dd($request->all());
        // TODO create logic update profile
    }

    public function faq(){
        return view("mahasiswa.faq");
    }
}