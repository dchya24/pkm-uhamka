<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\DataDosen;
use App\Models\DataMahasiswa;
use App\Models\JenisPkm;
use App\Models\Penilai;
use App\Models\usulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsulanController extends Controller
{
    public function showKirimUsulanPage(){
        $dataMahasiswa = DataMahasiswa::where('keterangan', 1)->get();
        $jenisPkm = JenisPkm::all();
        $penilai = Penilai::select('id')->get();
        
        $idsPenilai = [];
        foreach($penilai as $item){
            array_push($idsPenilai, $item->id);
        }

        $dataDosen = DataDosen::whereNotIn('id', $idsPenilai)->get();
        return view("mahasiswa.kirim-usulan", compact("dataMahasiswa", "jenisPkm", "dataDosen"));
    }

    public function store(Request $request){
        $user = Auth::user();

        $anggota = ["satu", "dua", "tiga", "empat"];

        $data = [
            "judul" => $request->judul,
            "pendahuluan" => $request->pendahuluan,
            "jenis_pkm_id" => $request->jenis_pkm_id,
            "anggaran" => $request->anggaran,
            "tahun_pengajuan" => $request->has('tahun_pengajuan') ? $request->tahun_pengajuan : date("Y"),
            "pembimbing_id" => $request->pembimbing_id,
            "ketua_kelompok_id" => $user->data_mahasiswa_id,
            "tugas_ketua_kelompok" => $request->tugas_ketua,
        ];

        foreach($request->anggota_kelompok as $key => $item){
            $data["anggota_" . $anggota[$key] . "_id"] = $item;
            $data["tugas_anggota_" . $anggota[$key]] = $request->tugas_anggota[$key];
        }

        $usulan = usulan::create($data);

        if(!$usulan){
            return redirect()->back()->with("error", "Gagal mengirim usulan");
        }

        // TODO insert Data
        return redirect()->back()->with("success", "Berhasil mengirim usulan");
    }
}
