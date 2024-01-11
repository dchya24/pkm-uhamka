<?php

namespace App\Http\Controllers\Admin\ManajemenProposal;

use App\Http\Controllers\Controller;
use App\Models\usulan;
use Illuminate\Http\Request;

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
}
