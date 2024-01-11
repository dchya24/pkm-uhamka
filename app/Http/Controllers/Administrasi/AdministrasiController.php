<?php

namespace App\Http\Controllers\Administrasi;

use App\Http\Controllers\Controller;
use App\Models\AksesHalaman;
use App\Models\Informasi;
use App\Models\usulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

        $usulan = usulan::where('penilai_administrasi_id', $penilai->id);

        if(!empty($_GET['status'])){
            $usulan->where('status_penilaian_administrasi', $_GET['status']);
        }
        else {
            $usulan->where('status_penilaian_administrasi', 'waiting');
        }

        $usulan = $usulan->paginate(4);

        return view("penilai-administrasi.penilaian-proposal", compact("usulan"));
    }

    public function profile(){
        return view("penilai-administrasi.profile");
    }

    public function detailPenilaian($id){
        $detail = usulan::find($id);
        $aksesHalaman = AksesHalaman::where('slug', 'usulan-' . $detail->usulan)->first();

        $hasEditUsulan = $aksesHalaman->ubah_nilai_substansi;

        return view("penilai-administrasi.detail-penilaian", compact('detail', 'hasEditUsulan'));
    }

    public function updatePassword(Request $request){
        $user = Auth::user();

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

        if(in_array($usulan->penilaian_administrasi, ['done', 'rejected'])){
            if(file_exists($usulan->form_penilaian_administrasi)){
                unlink($usulan->form_penilaian_administrasi);
            }
        }

        $form_penilaian_administrasi = $request->file('form_penilaian_administrasi');
        $form_penilaian_administrasi_name = $form_penilaian_administrasi->getClientOriginalName();

        $form_penilaian_administrasi->move(public_path('upload/penilaian/administrasi'), $form_penilaian_administrasi_name);

        $usulan->form_penilaian_administrasi = 'upload/penilaian/administrasi/' . $form_penilaian_administrasi_name;
        $usulan->status_penilaian_administrasi = 'done';
        $usulan->save();

        return redirect()->back();
    }
}
