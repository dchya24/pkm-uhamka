<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\usulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WakilRektorController extends Controller
{
    public function index(){
        $warek = Auth::guard('admin')->user();

        $internal = usulan::where('wakil_rektor_id', $warek->id)->where('status_rekomendasi', 'internal')->count();
        $belmawa = usulan::where('wakil_rektor_id', $warek->id)->where('status_rekomendasi', 'belmawa')->count();
        $belumDiputuskan = usulan::where('wakil_rektor_id', $warek->id)->whereNull('status_rekomendasi')->count();
        $usulan = usulan::where('wakil_rektor_id', $warek->id)->get();

        return view("wakil-rektor.dashboard", compact('internal', 'belmawa', 'belumDiputuskan', 'usulan'));
    }

    public function informasi(){
        $informasi = Informasi::where('untuk_warek', true)->get();

        return view("wakil-rektor.informasi", compact('informasi'));
    }

    public function penilaian(){
        $warek = Auth::guard('admin')->user();
        $usulan = usulan::where('wakil_rektor_id', $warek->id)->get();

        return view("wakil-rektor.penilaian-proposal", compact("usulan"));
    }

    public function profile(){
        return view("wakil-rektor.profile");
    }

    public function detailPenilaian($id){
        $detail = usulan::find($id);

        return view("wakil-rektor.detail-penilaian", compact('detail'));
    }

    public function buatRekomendasi(Request $request, $id){
        $status_rekomendasi = $request->status_rekomendasi;

        $usulan = usulan::find($id);

        $usulan->status_rekomendasi = $status_rekomendasi;

        $usulan->save();

        return redirect()->back();
    }
}
