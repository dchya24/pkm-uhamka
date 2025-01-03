<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\BaseMahasiswaController;
use App\Http\Requests\KirimUsulanRequest;
use App\Models\AksesHalaman;
use App\Models\DataDosen;
use App\Models\DataMahasiswa;
use App\Models\JenisPkm;
use App\Models\Penilai;
use App\Models\Rekomendasi;
use App\Models\usulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsulanController extends BaseMahasiswaController
{
    public function showKirimUsulanPage(){
        $user = Auth::guard('mahasiswa')->user();

        $getAccess = $this->getAksesKirimUsulan($user);

        $aksesHalaman = $getAccess[0];
        $oldUsulan = $getAccess[1]->first();

        $canCreateUsulan = empty($oldUsulan) ? true : false;

        $dataMahasiswa = DataMahasiswa::where('keterangan', 1)->get();
        $jenisPkm = JenisPkm::all();
        $penilai = Penilai::select('id')->get();
        $user = Auth::guard('mahasiswa')->user();
        
        $idsPenilai = [];
        foreach($penilai as $item){
            array_push($idsPenilai, $item->id);
        }

        $dataDosen = DataDosen::whereNotIn('id', $idsPenilai)
            ->where('keterangan', 1)
            ->get();
            
        return view("mahasiswa.kirim-usulan", compact(
            "dataMahasiswa", "jenisPkm", "dataDosen", "user" , "canCreateUsulan", "oldUsulan",
            "aksesHalaman"
        ));
    }

    public function store(KirimUsulanRequest $request){
        $user = Auth::guard('mahasiswa')->user();
        $anggota = ["satu", "dua", "tiga", "empat"];

        $lembar_bimbinan = $request->file('lembar_bimbingan');
        $lembar_bimbinan_name = $lembar_bimbinan->getClientOriginalName();
        $lembar_bimbinan->move(public_path('upload/lembar_bimbingan'), $lembar_bimbinan_name);

        $aksesHalaman = AksesHalaman::where('buka_usulan', 1)->first();
        $intUsulan = explode("-", $aksesHalaman->slug)[1];

        $data = [
            "judul" => $request->judul,
            "pendahuluan" => $request->pendahuluan,
            "jenis_pkm_id" => $request->jenis_pkm_id,
            "usulan" => $intUsulan,
            "anggaran" => $request->anggaran,
            "tahun_pengajuan" => $request->has('tahun_pengajuan') ? $request->tahun_pengajuan : date("Y"),
            "pembimbing_id" => $request->pembimbing_id,
            "ketua_kelompok_id" => $user->data_mahasiswa_id,
            "tugas_ketua_kelompok" => $request->tugas_ketua,
            "lembar_bimbingan" => 'upload/lembar_bimbingan/' . $lembar_bimbinan_name,
            "created_at" => now(),
        ];

        foreach($request->anggota_kelompok as $key => $item){
            if($item == null){
                continue;
            }

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
        $user = Auth::guard('mahasiswa')->user();
        $getAccess = $this->getAksesKirimUsulan($user);
        $aksesHalaman = $getAccess[0];

        $id = $request->has('id') ? $request->id : null;

        if($id == null){
            $detail = usulan::where('ketua_kelompok_id', $user->data_mahasiswa_id)
                ->orderBy('id', 'desc')->first();

        }
        else{
            $detail = usulan::where('ketua_kelompok_id', $user->data_mahasiswa_id)
                ->where('id', $id)
                ->first();
        }

        $linkGroup = null;
        if(!empty($detail) && $detail->status_rekomendasi != null){
            $data = DB::table('rekomendasi')
            ->where(DB::raw('LOWER(nama)'), 'like', '%' . strtolower($detail->status_rekomendasi) . '%')
            ->first();
            
            if(substr($data->link_group, 0, 4) != "http"){
                $linkGroup = "https://" . $data->link_group;
            }
            else{
                $linkGroup = $data->link_group;
            }
        }

        $usulan = usulan::where('ketua_kelompok_id', $user->data_mahasiswa_id)
            ->whereNot('id', $id)
            ->select('id', 'usulan')->get();

        return view("mahasiswa.usulan", compact("usulan", "detail", "aksesHalaman", "linkGroup"));
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

        $lembar_proposal->move(public_path('upload/lembar_proposal'), $lembar_proposal_name);
        $lembar_biodata_dospem->move(public_path('upload/lembar_biodata_dospem'), $lembar_biodata_dospem_name);
        $lembar_biodata_kelompok->move(public_path('upload/lembar_biodata_kelompok'), $lembar_biodata_kelompok_name);
        $lembar_pengesahan->move(public_path('upload/lembar_pengesahan'), $lembar_pengesahan_name); 

        $usulan->lembar_proposal = 'upload/lembar_proposal/' . $lembar_proposal_name;
        $usulan->lembar_biodata_dospem = 'upload/lembar_biodata_dospem/' . $lembar_biodata_dospem_name;
        $usulan->lembar_biodata_kelompok = 'upload/lembar_biodata_kelompok/' . $lembar_biodata_kelompok_name;
        $usulan->lembar_pengesahan = 'upload/lembar_pengesahan/' . $lembar_pengesahan_name;

        $usulan->status_penilaian_administrasi = "submited";

        $usulan->save();

        return redirect()->back();
    }
}
