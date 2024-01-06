<?php

namespace App\Http\Controllers\Admin\ManajemenProposal;

use App\Http\Controllers\Controller;
use App\Models\Rekomendasi;
use Illuminate\Http\Request;

class RekomendasiController extends Controller
{
    public function update(Request $request, $id){
        $rekomendasi = Rekomendasi::find($id);

        $rekomendasi->nama = $request->rekomendasi;
        $rekomendasi->link_group = $request->link_group;

        $rekomendasi->save();

        return redirect()->back();
    }
}
