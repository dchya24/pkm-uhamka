<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\usulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $usulan = usulan::where('wakil_rektor_id', $warek->id);

        if(!empty($_GET['status'])){
            $usulan->where('status_rekomendasi', $_GET['status']);
        }
        else {
            $usulan->whereNull('status_rekomendasi');
        }

        $usulan = $usulan->paginate(4);

        return view("wakil-rektor.penilaian-proposal", compact("usulan"));
    }

    public function profile(){
        return view("wakil-rektor.profile");
    }

    public function detailPenilaian($id){
        $detail = usulan::find($id);

        return view("wakil-rektor.detail-penilaian", compact('detail'));
    }

    public function updatePassword(Request $request){
        $user = Auth::guard('admin')->user();

        if($request->newPassword != $request->confirmPassword){
            return redirect()->back()->with('error', 'Password baru dan konfirmasi password tidak sama');
        }

        $check = Hash::check($request->currentPassword, $user->password);

        if(!$check){
            return redirect()->back()->with('error', 'Password saat ini tidak sesuai');
        }
        
        $user->password = Hash::make($request->newPassword);
        $user->save();
        return redirect()->back()->with('success', 'Password berhasil diubah');
    }

    public function buatRekomendasi(Request $request, $id){
        $status_rekomendasi = $request->status_rekomendasi;

        $usulan = usulan::find($id);

        $usulan->status_rekomendasi = $status_rekomendasi;

        $usulan->save();

        return redirect()->back();
    }
}
