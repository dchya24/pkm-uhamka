<?php

namespace App\Http\Controllers\Admin\ManajemenProposal;

use App\Http\Controllers\Controller;
use App\Models\Penilai;
use App\Models\usulan;
use Illuminate\Http\Request;

// TODO Test this controller and blade
class PenilaiAdministrasiController extends Controller
{
    public function index(){
        $penilaiAdministrasi = Penilai::select("id", "nama")->where('jenis_penilai', 2)->get();
        
        return view('admin.manajemen-proposal.penilai-administrasi', compact('penilaiAdministrasi'));
    }

    public function show($id){
        $penilaiAdministrasi = Penilai::select("id", "nama")
            ->with(['penilaianAdministrasi', 'penilaianAdministrasi.jenisPkm', 'penilaianAdministrasi.ketuaKelompok', 'penilaianAdministrasi.pembimbing'])
            ->where('id', $id)
            ->first();
        
        $listUsulan = usulan::with(['jenisPkm', 'ketuaKelompok', 'pembimbing'])
            ->whereNull('penilai_administrasi_id')
            ->get();

        return view('admin.manajemen-proposal.tambah-penilai-administrasi', compact('penilaiAdministrasi', 'listUsulan'));
    }

    public function store(Request $request){
        $usulanIds = $request->usulanId;
        $penilaiAdministrasiId = $request->penilai_id;

        foreach($usulanIds as $usulanId){
            $usulan = usulan::find($usulanId);
            $usulan->penilai_administrasi_id = $penilaiAdministrasiId;
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
