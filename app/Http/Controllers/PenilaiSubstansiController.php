<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class PenilaiSubstansiController extends Controller
{
    public function index(){
        return view("penilai-substansi.dashboard");
    }

    public function informasi(){
        $informasi = Informasi::where('untuk_penilai_substansi', true)->get();

        return view("penilai-substansi.informasi", compact('informasi'));
    }

    public function penilaian(){
        return view("penilai-substansi.penilaian-proposal");
    }

    public function profile(){
        return view("penilai-substansi.profile");
    }
}
