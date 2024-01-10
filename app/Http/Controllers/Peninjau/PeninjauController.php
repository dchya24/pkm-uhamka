<?php

namespace App\Http\Controllers\Peninjau;

use App\Http\Controllers\Controller;
use App\Models\AksesHalaman;
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

        $usulan = usulan::where('peninjau_id', $peninjau->id);

        
        if(!empty($_GET['status'])){
            $usulan->where('status_penilaian_peninjau', $_GET['status']);
        }
        else {
            $usulan->where('status_penilaian_peninjau', 'waiting');
        }

        $usulan = $usulan->paginate(4);

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
        $aksesHalaman = AksesHalaman::where('slug', 'usulan-' . $detail->usulan)->first();

        $hasEditUsulan = $aksesHalaman->ubah_nilai_substansi;

        return view("reviewer.detail-penilaian", compact('detail', 'hasEditUsulan'));
    }

    public function tambahPenilaian(Request $request, $id){
        $usulan = usulan::find($id);

        if(in_array($usulan->penilaian_administrasi, ['done', 'rejected'])){
            if(file_exists($usulan->form_penilaian_administrasi)){
                unlink($usulan->form_penilaian_administrasi);
            }
        }
        $form_penilaian_peninjau = $request->file('form_penilaian_peninjau');
        $form_penilaian_peninjau_name = $form_penilaian_peninjau->getClientOriginalName();

        $form_penilaian_peninjau->move(public_path('upload/penilaian/peninjau'), $form_penilaian_peninjau_name);

        $usulan->form_penilaian_peninjau = 'upload/penilaian/peninjau/' . $form_penilaian_peninjau_name;
        $usulan->komentar_ke_mahasiswa = $request->komentar_ke_mahasiswa;
        $usulan->komentar_ke_warek = $request->komentar_ke_warek;
        $usulan->status_penilaian_peninjau = "done";
        $usulan->save();
        
        return redirect()->back();
    }
}
