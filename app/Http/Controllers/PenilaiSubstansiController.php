<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenilaiSubstansiController extends Controller
{
    public function index(){
        return view("penilai-substansi.dashboard");
    }

    public function informasi(){
        return view("penilai-substansi.informasi");
    }

    public function penilaian(){
        return view("penilai-substansi.penilaian-proposal");
    }

    public function profile(){
        return view("penilai-substansi.profile");
    }
}
