<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\usulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PenilaiSubstansiController extends Controller
{
    public function index(){
        $penilai = Auth::guard('penilai')->user();

        $usulan = usulan::where('penilai_substansi_id', $penilai->id)->get();
        $countDataMinor = usulan::where('penilai_substansi_id', $penilai->id)->where('status_penilai_substansi', 'minor')->count();
        $countDataMayor = usulan::where('penilai_substansi_id', $penilai->id)->where('status_penilai_substansi', 'mayor')->count();
        $countDataDiNilai = usulan::where('penilai_substansi_id', $penilai->id)->where('status_penilai_substansi', 'sedang dinilai')->count();
        

        return view("penilai-substansi.dashboard", compact('usulan', 'penilai', 
            'countDataMinor', 'countDataMayor', 'countDataDiNilai'));
    }

    public function informasi(){
        $informasi = Informasi::where('untuk_penilai_substansi', true)->get();

        return view("penilai-substansi.informasi", compact('informasi'));
    }

    public function penilaian(){
        $penilai = Auth::guard('penilai')->user();

        $usulan = usulan::where('penilai_substansi_id', $penilai->id)->get();

        return view("penilai-substansi.penilaian-proposal", compact('usulan', 'penilai'));
    }

    // TODO create detail and input nilai
    public function detailPenilaian(){
        return view("penilai-substansi.detail-penilaian");
    }

    public function profile(){
        return view("penilai-substansi.profile");
    }
}
