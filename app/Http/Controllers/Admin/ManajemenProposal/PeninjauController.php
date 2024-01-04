<?php

namespace App\Http\Controllers\Admin\ManajemenProposal;

use App\Http\Controllers\Controller;
use App\Models\Penilai;
use App\Models\Peninjau;
use App\Models\usulan;
use Illuminate\Http\Request;

// TODO Test this controller and blade
class PeninjauController extends Controller
{
    public function index(){
        $peninjau = Peninjau::with("dosen")->get();
        
        return view('admin.manajemen-proposal.peninjau', compact('peninjau'));
    }

    public function show($id){
        $peninjau = Peninjau::select("id", "nama")
            ->with(['penilaianAdministrasi', 'penilaianAdministrasi.jenisPkm', 'penilaianAdministrasi.ketuaKelompok', 'penilaianAdministrasi.pembimbing'])
            ->where('id', $id)
            ->first();
        
        $listUsulan = usulan::with(['jenisPkm', 'ketuaKelompok', 'pembimbing'])
            ->whereNull('penilai_administrasi_id')
            ->get();

        return view('admin.manajemen-proposal.tambah-peninjau', compact('peninjau', 'listUsulan'));
    }

    public function store(Request $request){
        $usulanIds = $request->usulanId;
        $peninjauId = $request->penilai_id;

        foreach($usulanIds as $usulanId){
            $usulan = usulan::find($usulanId);
            $usulan->penilai_administrasi_id = $peninjauId;
            $usulan->save();
        }

        return redirect()->back();
    }

    public function deletePenilai($id){
        $usulan = usulan::find($id);

        $usulan->penilai_administrasi_id = null;
        $usulan->save();

        return redirect()->back();
    }
}
