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

        $lembar_bimbinan = $request->file('lembar_bimbingan');
        $lembar_bimbinan_name = $lembar_bimbinan->getClientOriginalName();
        $lembar_bimbinan->move('upload/lembar_bimbingan', $lembar_bimbinan_name);

        $countOldUsulan = usulan::where('ketua_kelompok_id', $user->data_mahasiswa_id)->count();

        $data = [
            "judul" => $request->judul,
            "pendahuluan" => $request->pendahuluan,
            "jenis_pkm_id" => $request->jenis_pkm_id,
            "usulan" => $countOldUsulan + 1,
            "anggaran" => $request->anggaran,
            "tahun_pengajuan" => $request->has('tahun_pengajuan') ? $request->tahun_pengajuan : date("Y"),
            "pembimbing_id" => $request->pembimbing_id,
            "ketua_kelompok_id" => $user->data_mahasiswa_id,
            "tugas_ketua_kelompok" => $request->tugas_ketua,
            "lembar_bimbingan" => 'upload/lembar_bimbingan/' . $lembar_bimbinan_name,
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

    public function index(Request $request){
        $id = $request->has('id') ? $request->id : 1;

        $user = Auth::user();
        $usulan = usulan::where('ketua_kelompok_id', $user->data_mahasiswa_id)
            ->whereNot('id', $id)
            ->select('id', 'usulan')->get();

        $detail = usulan::where('usulan', $id)
            ->first();

        return view("mahasiswa.usulan", compact("usulan", "detail"));
    }

    public function pengajuanAdministrasi(Request $request, $id){
        $usulan = usulan::find($id);

        $lembar_proposal = $request->file('lembar_proposal');
        $lembar_biodata_dospem = $request->file('lembar_biodata_dospem');
        $lembar_biodata_kelompok =  $request->file('lembar_biodata_kelompok');
        $lembar_pengesahan = $request->file('lembar_pengesahan');

        $lembar_proposal_name = $lembar_proposal->getClientOriginalName();
        $lembar_biodata_dospem_name = $lembar_biodata_dospem->getClientOriginalName();
        $lembar_biodata_kelompok_name = $lembar_biodata_kelompok->getClientOriginalName(); 
        $lembar_pengesahan_name = $lembar_pengesahan->getClientOriginalName();

        $lembar_proposal->move('upload/lembar_proposal', $lembar_proposal_name);
        $lembar_biodata_dospem->move('upload/lembar_biodata_dospem', $lembar_biodata_dospem_name);
        $lembar_biodata_kelompok->move('upload/lembar_biodata_kelompok', $lembar_biodata_kelompok_name);
        $lembar_pengesahan->move('upload/lembar_pengesahan', $lembar_pengesahan_name); 

        $usulan->lembar_proposal = 'upload/lembar_proposal/' . $lembar_proposal_name;
        $usulan->lembar_biodata_dospem = 'upload/lembar_biodata_dospem/' . $lembar_biodata_dospem_name;
        $usulan->lembar_biodata_kelompok = 'upload/lembar_biodata_kelompok/' . $lembar_biodata_kelompok_name;
        $usulan->lembar_pengesahan = 'upload/lembar_pengesahan/' . $lembar_pengesahan_name;

        $usulan->status_penilaian_administrasi = "submited";

        $usulan->save();

        return redirect()->back();
    }
}
