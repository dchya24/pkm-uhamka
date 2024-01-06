<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KetuaKelompok;
use App\Models\Penilai;
use App\Models\usulan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboardPage(){
        $allUsulan = usulan::all();
        $internalUsulan = usulan::where('status_rekomendasi', 'internal')->count();
        $belmawaUsulan = usulan::where('status_rekomendasi', 'belmawa')->count();
        $akunKetua = KetuaKelompok::all()->count();
        $akunPenilai = Penilai::all()->count();

        return view("admin.dashboard", compact('allUsulan', 'internalUsulan', 'belmawaUsulan', 'akunKetua', 'akunPenilai'));
    }

    public function aksesHalamanPage(){
        return view("admin.akses-halaman");
    }

    public function skemaPkmPage(){
        return view("admin.skema-pkm");
    }

    public function sertifikatPage(){
        return view("admin.sertifikat");
    }
}
