<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        $userInfo = Auth::user();

        return view("mahasiswa.dashboard", compact('userInfo'));
    }

    public function informasi(){
        $informasi = Informasi::where('untuk_mahasiswa', true)->get();

        dd($informasi);
        // TODO return view informasi blade with data informasi
    }
}
