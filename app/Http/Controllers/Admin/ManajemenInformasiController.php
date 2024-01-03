<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Informasi;

class ManajemenInformasiController extends Controller
{
    public function index(){
        $informasi = Informasi::all();

        return view("admin.manajemen-informasi", compact("informasi"));
    }

    public function store(Request $request){
        $data = $request->except('_token', "file");

        $fileUpload = null;
        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $fileUpload = "upload/informasi/" . $fileName;
            
            $file->move("upload/informasi", $fileName);
        }

        $data["file"] = $fileUpload;

        $createInformasi = Informasi::insert([
            "judul" => $request->judul,
            "description" => $request->description,
            "file" => $fileUpload,
            "untuk_mahasiswa" => $request->has('untuk_mahasiswa') ? 1 : 0,
            "untuk_penilai_substansi" => $request->has('untuk_penilai_substansi') ? 1 : 0,
            "untuk_penilai_administrasi" => $request->has('untuk_penilai_administrasi') ? 1 : 0,
            "untuk_peninjau" => $request->has('untuk_peninjau') ? 1 : 0,
            "untuk_warek" => $request->has('untuk_warek') ? 1 : 0,
        ]);

        return redirect()->back();
    }

    public function delete($id){
        $informasi = Informasi::find($id);

        if(!$informasi) abort(404);

        $file = $informasi->file;
        $informasi->delete();

        unlink($file);

        return redirect()->back();
    }

    public function update(Request $request, $id){
        dd($request->all());
        
        $informasi = Informasi::find($id);

        if(!$informasi) abort(404);

        $data = $request->except('_token', "file");

        $informasi->judul = $data['judul'];
        $informasi->description = $data['description'];
        $informasi->untuk_mahasiswa = $data['untuk_mahasiswa'];
        $informasi->untuk_penilai_substansi = $data['untuk_penilai_substansi'];
        $informasi->untuk_penilai_administrasi = $data['untuk_penilai_administrasi'];
        $informasi->untuk_peninjau = $data['untuk_peninjau'];
        $informasi->untuk_warek = $data['untuk_warek'];

        $fileUpload = null;
        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $fileUpload = "upload/informasi/" . $fileName;

            unlink($informasi->file);
            
            $file->move("upload/informasi", $fileName);

            $informasi->file = $fileUpload;
        }

        // TODO Belum ditesting

        $informasi->save();
        
        return redirect()->back();
    }
}
