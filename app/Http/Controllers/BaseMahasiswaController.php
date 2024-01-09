<?php

namespace App\Http\Controllers;

use App\Models\AksesHalaman;
use App\Models\KetuaKelompok;
use App\Models\usulan;

class BaseMahasiswaController extends Controller
{
    public function getAksesKirimUsulan(KetuaKelompok $user){
        $aksesHalaman = AksesHalaman::select('id', 'usulan', 'slug')
            ->where('buka_usulan', true)
            ->first();
        
        $intUsulan = explode("-", $aksesHalaman->slug)[1];

        $otherUsulan = usulan::where('ketua_kelompok_id', $user->data_mahasiswa_id)
            ->where("tahun_pengajuan", date("Y"))
            ->where('usulan', $intUsulan);

        $oldUsulan = usulan::where('ketua_kelompok_id', $user->data_mahasiswa_id)
            ->where("tahun_pengajuan", date("Y"))
            ->whereNot('status_penilaian_substansi', "mayor");
        
        $unionData = $otherUsulan->union($oldUsulan);

        if($unionData->count() != 0){
            $aksesHalaman = null;
        }
        
        return [$aksesHalaman, $unionData];
    }
}
