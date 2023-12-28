<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataMahasiswa;
use App\Models\KetuaKelompok;
use Illuminate\Http\Request;

class KetuaKelompokController extends Controller
{
    public function index(){
        $ketuaKelompok = KetuaKelompok::all();

        return view("admin.manajemen-akun.ketua-kelompok", compact("ketuaKelompok"));
    }

    public function store(Request $request){
        $nim = $request->nim;
        $password = bcrypt($request->password);

        $checkDataMahasiswa = DataMahasiswa::where("nim", $nim)->first();

        if(!$checkDataMahasiswa) abort(404); 
        
        $checkDataPeninjau = KetuaKelompok::where("nim", $nim)->first();

        if($checkDataPeninjau) abort(402);

        $prepareDataInsert = [
            "nim" => $nim,
            "data_mahasiswa_id" => $checkDataMahasiswa->id,
            "password" => $password
        ];

        $insertedData = KetuaKelompok::insert($prepareDataInsert);

        if(!$insertedData) abort(500);

        return redirect()->back();
    }

    public function update(Request $request, $id){
        if(empty($request->password)){
            abort(500);
        }

        $password = bcrypt($request->password);

        $updated = KetuaKelompok::where("id", $id)
            ->update([
                "password" => $password
            ]);

        if(!$updated) abort(503);

        return redirect()->back();
    }

    public function destroy($id){
        $deleted = KetuaKelompok::destroy($id);

        if(!$deleted){
            abort(500);
        }

        return redirect()->back();
    }
}
