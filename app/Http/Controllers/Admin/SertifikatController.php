<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sertifikat;
use Illuminate\Http\Request;

class SertifikatController extends Controller
{
    public function index(){
        $sertifikat = Sertifikat::all();
        return view("admin.sertifikat", compact("sertifikat"));
    }

    public function store(Request $request){
        foreach($request->file as $file){
            $nama = $file->getClientOriginalName();
            $file->move(public_path("upload/sertifikat"), $nama);
            Sertifikat::create([
                "nama" => $nama,
                "file" => "upload/sertifikat/" . $nama
            ]);
        }

        return redirect()->back();
    }

    public function destroy($id){
        $sertifikat = Sertifikat::find($id);
        unlink(public_path($sertifikat->file));
        $sertifikat->delete();
        
        return redirect()->back();
    }
}
