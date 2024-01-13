<?php

namespace App\Http\Controllers\Admin\ManajemenProposal;

use App\Http\Controllers\Controller;
use App\Models\DataDosen;
use App\Models\DataMahasiswa;
use App\Models\JenisPkm;
use App\Models\Penilai;
use App\Models\usulan;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;

class ManajemenProposalController extends Controller
{
    public function index(){
        $usulan = usulan::all();

        return view('admin.manajemen-proposal.proposal', compact('usulan'));
    }

    public function show($id){
        $usulan = usulan::find($id);
        $dataMahasiswa = DataMahasiswa::where('keterangan', 1)->get();
        $jenisPkm = JenisPkm::all();
        $penilai = Penilai::select('id')->get();
        $user = Auth::guard('mahasiswa')->user();
        
        $idsPenilai = [];
        foreach($penilai as $item){
            array_push($idsPenilai, $item->id);
        }

        $dataDosen = DataDosen::whereNotIn('id', $idsPenilai)->get();

        return view('admin.manajemen-proposal.proposal-detail', compact('usulan', 'dataMahasiswa', 'jenisPkm', 'dataDosen', 'user'));
    }

    public function update(Request $request, $id){
        $usulan = usulan::find($id);
        $anggota = ["satu", "dua", "tiga", "empat"];

        $data = [
            "judul" => $request->judul,
            "pendahuluan" => $request->pendahuluan,
            "jenis_pkm_id" => $request->jenis_pkm_id,
            "anggaran" => $request->anggaran,
            "tahun_pengajuan" => $request->has('tahun_pengajuan') ? $request->tahun_pengajuan : date("Y"),
            "pembimbing_id" => $request->pembimbing_id,
            "tugas_ketua_kelompok" => $request->tugas_ketua,
            "updated_at" => now(),
        ];

        foreach($request->anggota_kelompok as $key => $item){
            $data["anggota_" . $anggota[$key] . "_id"] = $item;
            $data["tugas_anggota_" . $anggota[$key]] = $request->tugas_anggota[$key];
        }

        if($request->hasFile('lembar_bimbingan')){
            $lembar_bimbingan_file = $request->file('lembar_bimbingan');
            $filename = $this->uploadFile(
                $lembar_bimbingan_file, 
                "lembar_bimbingan", 
                $usulan->lembar_bimbingan);
            $data["lembar_bimbingan"] = $filename;
        }

        if($request->hasFile('lembar_proposal')){
            $lembar_proposal_file = $request->file('lembar_proposal');

            $filename = $this->uploadFile(
                $lembar_proposal_file, 
                "lembar_proposal", 
                $usulan->lembar_proposal);
            $data["lembar_proposal"] = $filename;
        }

        if($request->hasFile('lembar_biodata_dospem')){
            $lembar_biodata_dospem_file = $request->file('lembar_biodata_dospem');
            $filename = $this->uploadFile(
                $lembar_biodata_dospem_file, 
                "lembar_biodata_dospem", 
                $usulan->lembar_biodata_dospem);
            $data["lembar_biodata_dospem"] = $filename;
        }

        if($request->hasFile('lembar_biodata_kelompok')){
            $lembar_biodata_kelompok_file = $request->file('lembar_biodata_kelompok');
            $filename = $this->uploadFile(
                $lembar_biodata_kelompok_file, 
                "lembar_biodata_kelompok", 
                $usulan->lembar_biodata_kelompok);
            $data["lembar_biodata_kelompok"] = $filename;
        }
        
        if($request->hasFile('lembar_pengesahan')){
            $lembar_pengesahan_file = $request->file('lembar_pengesahan');
            $filename = $this->uploadFile(
                $lembar_pengesahan_file, 
                "lembar_pengesahan", 
                $usulan->lembar_pengesahan);
            $data["lembar_pengesahan"] = $filename;
        }

        $update = Usulan::where('id', $id)->update($data);

        return redirect()->back();
    }

    private function uploadFile(UploadedFile $file, $dirpath, $oldPath = ""){
        if($oldPath != null){
            if(file_exists($oldPath)){
                unlink($oldPath);
            }
        }

        $file_name = $file->getClientOriginalName();
        $file->move('upload/' . $dirpath, $file_name);

        $filename = 'upload/' . $dirpath . "/" . $file_name;

        return $filename;
    }

    public function destroy(Request $request){
        $id = $request->id;
        $usulan = usulan::find($id);

        if(file_exists($usulan->lembar_bimbingan)){
            unlink($usulan->lembar_bimbingan);
        }

        
        if(file_exists($usulan->lembar_proposal)){
            unlink($usulan->lembar_proposal);
        }

        if(file_exists($usulan->lembar_biodata_dospem)){
            unlink($usulan->lembar_biodata_dospem);
        }
        
        if(file_exists($usulan->lembar_biodata_kelompok)){
            unlink($usulan->lembar_biodata_kelompok);
        }

        
        if(file_exists($usulan->lembar_pengesahan)){
            unlink($usulan->lembar_pengesahan);
        }

        $usulan->delete();

        return redirect()->back();
    }
}
