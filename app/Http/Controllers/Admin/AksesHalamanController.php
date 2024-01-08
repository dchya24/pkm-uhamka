<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AksesHalaman;
use Illuminate\Http\Request;

class AksesHalamanController extends Controller
{
    public function ubahAksesHalaman(Request $request){
        $array = [];

        foreach($request->except('_token') as $key => $value){
            $split = explode("__", $key);

            $array[$split[0]][$split[1]] = $value;
        }

        foreach($array as $key => $data){
            $aksesHalaman = AksesHalaman::where('slug', $key)->first();
            $aksesHalaman->buka_usulan = isset($data['buka_usulan']) ? true : false;
            $aksesHalaman->ubah_nilai_substansi = isset($data['ubah_nilai_substansi']) ? true : false;
            $aksesHalaman->ubah_nilai_administrasi = isset($data['ubah_nilai_administrasi']) ? true : false;
            $aksesHalaman->ubah_nilai_peninjauan = isset($data['ubah_nilai_peninjauan']) ? true : false;
            $aksesHalaman->ubah_rekomendasi = isset($data['ubah_rekomendasi']) ? true : false;

            $aksesHalaman->save();
        }

        return redirect()->back();
    }
}
