<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\BaseMahasiswaController;
use App\Models\Informasi;
use App\Models\Sertifikat;
use App\Models\usulan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

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

    public function updateProfie(Request $request){
        dd($request->all());
        // TODO create logic update profile
    }

    public function faq(){
        $userInfo = Auth::user();
        $getAccess = $this->getAksesKirimUsulan($userInfo);
        $aksesHalaman = $getAccess[0];

        return view("mahasiswa.faq", compact('aksesHalaman'));
    }
}
