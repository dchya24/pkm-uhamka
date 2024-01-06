<?php

namespace App\Http\Controllers\Administrasi;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use App\Models\usulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministrasiController extends Controller
{
    public function index(){
        $penilai = Auth::guard('penilai')->user();

        $usulan = usulan::where('penilai_administrasi_id', $penilai->id)->get();
        $countBelumDinilai = usulan::where('penilai_administrasi_id', $penilai->id)
            ->where('status_penilaian_administrasi', 'waiting')
            ->count();
        $countDataDiNilai = usulan::where('penilai_administrasi_id', $penilai->id)
            ->whereIn('status_penilaian_administrasi', ['done', 'rejected'])
            ->count();
        
        return view("penilai-administrasi.dashboard",compact('usulan', 'penilai', 
            'countBelumDinilai', 'countDataDiNilai'));
    }

    public function informasi(){
        $informasi = Informasi::where('untuk_penilai_administrasi', true)->get();

        return view("penilai-administrasi.informasi", compact('informasi'));
    }

    public function penilaian(){
        $penilai = Auth::guard('penilai')->user();

        $usulan = usulan::where('penilai_administrasi_id', $penilai->id)->get();
        return view("penilai-administrasi.penilaian-proposal", compact("usulan"));
    }

    public function profile(){
        return view("penilai-administrasi.profile");
    }

    public function detailPenilaian($id){
        $detail = usulan::find($id);

        return view("penilai-administrasi.detail-penilaian", compact('detail'));
    }

    public function tambahPenilaian(Request $request, $id){
        $usulan = usulan::find($id);

        $form_penilaian_administrasi = $request->file('form_penilaian_administrasi');
        $form_penilaian_administrasi_name = $form_penilaian_administrasi->getClientOriginalName();

        $form_penilaian_administrasi->move(public_path('upload/penilaian/administrasi'), $form_penilaian_administrasi_name);

        $usulan->form_penilaian_administrasi = 'upload/penilaian/administrasi/' . $form_penilaian_administrasi_name;
        $usulan->status_penilaian_administrasi = 'done';
        $usulan->save();

        return redirect()->back();
    }
}
