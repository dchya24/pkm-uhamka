<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataDosen;
use App\Models\Peninjau;
use Illuminate\Http\Request;

class PeninjauController extends Controller
{
    public function index(){
        $peninjau = Peninjau::all();

        return view("admin.manajemen-akun.peninjau", compact("peninjau"));
    }

    public function store(Request $request){
        $nidn = $request->nidn;
        $password = bcrypt($request->password);

        $checkDataDosen = DataDosen::where("nidn", $nidn)->first();

        if(!$checkDataDosen) abort(404); 
        
        $checkDataPeninjau = Peninjau::where("nidn", $nidn)->first();

        if($checkDataPeninjau) abort(402);

        $prepareDataInsert = [
            "nidn" => $nidn,
            "data_dosen_id" => $checkDataDosen->id,
            "password" => $password
        ];

        $insertedData = Peninjau::insert($prepareDataInsert);

        if(!$insertedData) abort(500);

        return redirect()->back();
    }

    public function update(Request $request, $id){
        if(empty($request->password)){
            abort(500);
        }

        $password = bcrypt($request->password);

        $updated = Peninjau::where("id", $id)
            ->update([
                "password" => $password
            ]);

        if(!$updated) abort(503);

        return redirect()->back();
    }

    public function destroy($id){
        $deleted = Peninjau::destroy($id);

        if(!$deleted){
            abort(500);
        }

        return redirect()->back();
    }
}
