<?php

namespace App\Http\Controllers\Administrasi;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use Illuminate\Http\Request;

class AdministrasiController extends Controller
{
    public function index(){
        return view("penilai-administrasi.dashboard");
    }

    public function informasi(){
        $informasi = Informasi::where('untuk_penilai_administrasi', true)->get();

        return view("penilai-administrasi.informasi", compact('informasi'));
    }

    public function penilaian(){
        return view("penilai-administrasi.penilaian-proposal");
    }

    public function profile(){
        return view("penilai-administrasi.profile");
    }
}
