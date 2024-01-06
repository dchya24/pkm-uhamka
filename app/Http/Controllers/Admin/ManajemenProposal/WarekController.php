<?php

namespace App\Http\Controllers\Admin\ManajemenProposal;

use App\Http\Controllers\Controller;
use App\Models\Administrator;
use App\Models\Penilai;
use App\Models\Peninjau;
use App\Models\usulan;
use Illuminate\Http\Request;

// TODO Test this controller and blade
class WarekController extends Controller
{
    public function index(){
        $warek = Administrator::where('type', 'warek')
            ->get();
        
        return view('admin.manajemen-proposal.wakil-rektor', compact('warek'));
    }

    public function show($id){
        $warek = Administrator::with("usulan")
            ->where('id', $id)
            ->first();
        
        $listUsulan = usulan::with(['jenisPkm', 'ketuaKelompok', 'pembimbing'])
            ->whereNull('wakil_rektor_id')
            ->where('status_penilaian_peninjau', "done")
            ->get();

        return view('admin.manajemen-proposal.tambah-wakil-rektor', compact('warek', 'listUsulan'));
    }

    public function store(Request $request){
        $usulanIds = $request->usulanId;
        $warekId = $request->warek_id;

        foreach($usulanIds as $usulanId){
            $usulan = usulan::find($usulanId);
            $usulan->wakil_rektor_id = $warekId;
            $usulan->save();
        }

        return redirect()->back();
    }

    // Delete warek from usulan
    public function deleteWarek($id){
        $usulan = usulan::find($id);

        $usulan->wakil_rektor_id = null;
        $usulan->save();

        return redirect()->back();
    }
}
