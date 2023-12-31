<?php

namespace App\Http\Controllers\Peninjau;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use App\Models\usulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeninjauController extends Controller
{
    public function index(){
        return view("reviewer.dashboard");
    }

    public function penilaian(){
        $peninjau = Auth::guard('peninjau')->user();

        $usulan = usulan::where('peninjau_id', $peninjau->id)->get();
        return view("reviewer.penilaian-proposal", compact("usulan"));
    }

    public function profile(){
        return view("reviewer.profile");
    }

    public function informasi(){
        $informasi = Informasi::where('untuk_peninjau', true)->get();

        return view("reviewer.informasi", compact("informasi"));
    }

    public function detailPenilaian($id){
        $detail = usulan::find($id);

        return view("reviewer.detail-penilaian", compact('detail'));
    }

    public function tambahPenilaian(Request $request, $id){
        $form_penilaian_peninjau = $request->file('form_penilaian_peninjau');
        $form_penilaian_peninjau_name = $form_penilaian_peninjau->getClientOriginalName();

        $form_penilaian_peninjau->move(public_path('upload/penilaian/peninjau'), $form_penilaian_peninjau_name);

        $usulan = usulan::find($id);
        $usulan->form_penilaian_peninjau = 'upload/penilaian/peninjau/' . $form_penilaian_peninjau_name;
        $usulan->komentar_ke_mahasiswa = $request->komentar_ke_mahasiswa;
        $usulan->komentar_ke_warek = $request->komentar_ke_warek;
        $usulan->status_penilaian_peninjau = "done";
        $usulan->save();
        
        return redirect()->back();
    }
}
