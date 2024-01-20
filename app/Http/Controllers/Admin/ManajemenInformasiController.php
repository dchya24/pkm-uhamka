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
        $fileUpload = "";
        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $fileUpload = "upload/informasi/" . $fileName;
            
            $file->move(public_path("upload/informasi"), $fileName);
        }

        $createInformasi = Informasi::insert([
            "judul" => $request->judul,
            "description" => $request->description,
            "file" => $fileUpload,
            "untuk_mahasiswa" => $request->has('untuk_mahasiswa') ? 1 : 0,
            "untuk_penilai_substansi" => $request->has('untuk_penilai_substansi') ? 1 : 0,
            "untuk_penilai_administrasi" => $request->has('untuk_penilai_administrasi') ? 1 : 0,
            "untuk_peninjau" => $request->has('untuk_peninjau') ? 1 : 0,
            "untuk_warek" => $request->has('untuk_warek') ? 1 : 0,
            "created_at" => now(),
        ]);

        return redirect()->back();
    }

    public function delete($id){
        $informasi = Informasi::find($id);

        if(!$informasi) abort(404);

        if($informasi->file !== null && file_exists($informasi->file)){
            unlink($informasi->file);
        }

        $informasi->delete();

        return redirect()->back();
    }

    public function update(Request $request, $id){
        $informasi = Informasi::find($id);

        if(!$informasi) abort(404);

        $data = $request->except('_token', "file");

        $informasi->judul = $data['judul'];
        $informasi->description = $data['description'];
        $informasi->untuk_mahasiswa = $request->has('untuk_mahasiswa') ? 1 : 0;
        $informasi->untuk_penilai_substansi = $request->has('untuk_substansi') ? 1 : 0;
        $informasi->untuk_penilai_administrasi = $request->has('untuk_administrasi') ? 1 : 0;
        $informasi->untuk_peninjau = $request->has('untuk_peninjau') ? 1 : 0;
        $informasi->untuk_warek = $request->has('untuk_warek') ? 1 : 0;

        $fileUpload = null;
        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $fileUpload = "upload/informasi/" . $fileName;

            if($informasi->file !== null && file_exists($informasi->file)){
                unlink($informasi->file);
            }
            
            $file->move(public_path("upload/informasi"), $fileName);

            $informasi->file = $fileUpload;
        }
        
        $informasi->save();
        
        return redirect()->back();
    }
}
