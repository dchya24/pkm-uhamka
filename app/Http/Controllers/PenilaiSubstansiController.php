<?php

namespace App\Http\Controllers;

use App\Models\AksesHalaman;
use App\Models\Informasi;
use App\Models\usulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PenilaiSubstansiController extends Controller
{
    public function index(){
        $penilai = Auth::guard('penilai')->user();

        $usulan = usulan::where('penilai_substansi_id', $penilai->id)->get();
        $countDataMinor = usulan::where('penilai_substansi_id', $penilai->id)->where('status_penilaian_substansi', 'minor')->count();
        $countDataMayor = usulan::where('penilai_substansi_id', $penilai->id)->where('status_penilaian_substansi', 'mayor')->count();
        $countDataDiNilai = usulan::where('penilai_substansi_id', $penilai->id)->where('status_penilaian_substansi', 'sedang dinilai')->count();
        

        return view("penilai-substansi.dashboard", compact('usulan', 'penilai', 
            'countDataMinor', 'countDataMayor', 'countDataDiNilai'));
    }

    public function informasi(){
        $informasi = Informasi::where('untuk_penilai_substansi', true)->get();

        return view("penilai-substansi.informasi", compact('informasi'));
    }

    public function penilaian(){
        $penilai = Auth::guard('penilai')->user();

        $usulan = usulan::where('penilai_substansi_id', $penilai->id);

        if(!empty($_GET['status'])){
            $usulan->where('status_penilaian_substansi', $_GET['status']);
        }
        else {
            $usulan->where('status_penilaian_substansi', 'sedang dinilai');
        }

        $usulan = $usulan->paginate(4);

        return view("penilai-substansi.penilaian-proposal", compact('usulan', 'penilai'));
    }

    // TODO create detail and input nilai
    public function detailPenilaian($id){
        $detail = usulan::find($id);
        $aksesHalaman = AksesHalaman::where('slug', 'usulan-' . $detail->usulan)->first();

        $hasEditUsulan = $aksesHalaman->ubah_nilai_substansi;

        return view("penilai-substansi.detail-penilaian", compact('detail', 'hasEditUsulan'));
    }

    public function profile(){
        return view("penilai-substansi.profile");
    }

    public function updatePassword(Request $request){
        $user = Auth::guard('penilai')->user();

        if($request->newPassword != $request->confirmPassword){
            return redirect()->back()->with('error', 'Password baru dan konfirmasi password tidak sama');
        }

        $check = Hash::check($request->currentPassword, $user->password);

        if(!$check){
            return redirect()->back()->with('error', 'Password saat ini tidak sesuai');
        }
        
        $user->password = Hash::make($request->newPassword);
        $user->save();
        return redirect()->back()->with('success', 'Password berhasil diubah');
    }

    public function tambahPenilaian(Request $request, $id){
        $usulan = usulan::find($id);

        $usulan->status_penilaian_substansi = $request->status_penilaian;

        if($request->hasFile('form_penilaian_substansi')){
            $lembar_penilaian = $request->file('form_penilaian_substansi');

            $nama_file = $lembar_penilaian->getClientOriginalName();

            $lembar_penilaian->move('upload/penilaian/substansi', $nama_file);

            $usulan->form_penilaian_substansi = 'upload/penilaian/substansi/' . $nama_file;
        }

        $usulan->save();

        return redirect()->back();
    }
}
