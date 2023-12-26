<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penilai;
use Illuminate\Http\Request;

class PenilaiController extends Controller
{
    public function index(){
        $penilai = Penilai::all();

        return view("admin.manajemen-akun.penilai", [
            "penilai" => $penilai
        ]);
    }

    public function store(Request $request){
        $data = $request->only(["nama", "username", "jenis_penilai"]);

        $data['password'] = bcrypt($request->password);

        $insert = Penilai::insert($data);

        if(!$insert){
            abort(500);
        }

        return redirect()->back();
    }

    public function update(Request $request, $id){
        $penilai = Penilai::findOrFail($id);

        $newData = $request->only("username", "nama", "jenis_penilai");

        if($request->has("password")){
            $newData['password'] = bcrypt($request->password);
        }

        if($request->jenis_penilai != $penilai->jenis_penilai){
            $jenisPenilai = [1 => "penilai_administrasi", "penilai_substansi"];
            /**
             * TODO
             * Create verification if penilai change type penilai
             * Make usulan proposal penilai set to null
             */
        }

        $penilai->update($newData);
        $penilai->save();

        return redirect()->back();
    }

    public function destroy($id){
        $deleted = Penilai::destroy($id);

        if(!$deleted){
            abort(500);
        }

        return redirect()->back();
    }
}
