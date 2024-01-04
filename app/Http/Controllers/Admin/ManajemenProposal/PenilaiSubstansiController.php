<?php

namespace App\Http\Controllers\Admin\ManajemenProposal;

use App\Http\Controllers\Controller;
use App\Models\Penilai;
use App\Models\usulan;
use Illuminate\Http\Request;

class PenilaiSubstansiController extends Controller
{
    public function index(){
        $penilaiSubstansi = Penilai::select("id", "nama")->where('jenis_penilai', 2)->get();
        
        return view('admin.manajemen-proposal.penilai-substansi', compact('penilaiSubstansi'));
    }

    public function show($id){
        $penilaiSubstansi = Penilai::select("id", "nama")
            ->with(['penilaianSubstansi', 'penilaianSubstansi.jenisPkm', 'penilaianSubstansi.ketuaKelompok', 'penilaianSubstansi.pembimbing'])
            ->where('id', $id)
            ->first();
        
        $listUsulan = usulan::with(['jenisPkm', 'ketuaKelompok', 'pembimbing'])
            ->whereNull('penilai_substansi_id')
            ->get();

        return view('admin.manajemen-proposal.tambah-penilai-substansi', compact('penilaiSubstansi', 'listUsulan'));
    }

    public function store(Request $request){
        $usulanIds = $request->usulanId;
        $penilaiSubstansiId = $request->penilai_id;

        foreach($usulanIds as $usulanId){
            $usulan = usulan::find($usulanId);
            $usulan->penilai_substansi_id = $penilaiSubstansiId;
            $usulan->save();
        }

        return redirect()->back();
    }

    public function deletePenilai($id){
        $usulan = usulan::find($id);

        $usulan->penilai_substansi_id = null;
        $usulan->save();

        return redirect()->back();
    }
}
