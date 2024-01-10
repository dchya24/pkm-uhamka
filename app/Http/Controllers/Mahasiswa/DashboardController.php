<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\BaseMahasiswaController;
use App\Models\Informasi;
use App\Models\Sertifikat;
use App\Models\usulan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends BaseMahasiswaController
{
    public function dashboard(){
        $userInfo = Auth::user();
        $getAccess = $this->getAksesKirimUsulan($userInfo);
        $aksesHalaman = $getAccess[0];

        $usulan = usulan::where('ketua_kelompok_id', $userInfo->data_mahasiswa_id)->get();

        return view("mahasiswa.dashboard", compact('userInfo', 'usulan', 'aksesHalaman'));
    }

    public function informasi(){
        $userInfo = Auth::user();
        $getAccess = $this->getAksesKirimUsulan($userInfo);
        $aksesHalaman = $getAccess[0];

        $informasi = Informasi::where('untuk_mahasiswa', true)->get();

        // TODO Testing feature
        return view("mahasiswa.informasi", compact("informasi", "aksesHalaman"));
    }

    public function sertifikat(){
        // TODO sertifikat
        $userInfo = Auth::user();
        $getAccess = $this->getAksesKirimUsulan($userInfo);
        $aksesHalaman = $getAccess[0];

        $sertifikat = Sertifikat::all();
        return view("mahasiswa.sertifikat", compact("sertifikat", "aksesHalaman"));
    }

    public function profile(){
        // TODO Profile
        $userInfo = Auth::user();
        $getAccess = $this->getAksesKirimUsulan($userInfo);
        $aksesHalaman = $getAccess[0];

        return view("mahasiswa.profile", compact('aksesHalaman'));
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

    public function faq(){
        $userInfo = Auth::user();
        $getAccess = $this->getAksesKirimUsulan($userInfo);
        $aksesHalaman = $getAccess[0];

        return view("mahasiswa.faq", compact('aksesHalaman'));
    }
}
