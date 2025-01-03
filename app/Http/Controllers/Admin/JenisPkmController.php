<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisPkm;
use Illuminate\Http\Request;

class JenisPkmController extends Controller
{
    public function index(){
        $jenisPkm = JenisPkm::all();

        return view("admin.skema-pkm", compact("jenisPkm"));
    }

    public function store(Request $request){
        $data = $request->only(["nama_skema", "singkatan"]);

        $jenisPkm = new JenisPkm;
        $jenisPkm->nama_skema = $data['nama_skema'];
        $jenisPkm->singkatan = $data['singkatan'];
        $jenisPkm->save();

        if(!$jenisPkm) abort(500);

        $formSubstansi = $request->file('form_substansi');
        $formAdministrasi = $request->file('form_administrasi');
        $formPeninjau = $request->file('form_peninjau');
        
        $formSubstansiFileName = "form_substansi_" . $request->singkatan . '_' . $jenisPkm->id . '.' . $formSubstansi->getClientOriginalExtension();
        $formAdministrasiFileName = "form_administrasi_" . $request->singkatan . '_' . $jenisPkm->id . '.' . $formAdministrasi->getClientOriginalExtension();
        $formPeninjauFileName = "form_peninjau_" . $request->singkatan . '_' . $jenisPkm->id . '.' . $formPeninjau->getClientOriginalExtension();

        $formSubstansi->move(public_path("upload/jenis-pkm"), $formSubstansiFileName);
        $formAdministrasi->move(public_path("upload/jenis-pkm"), $formAdministrasiFileName);
        $formPeninjau->move(public_path("upload/jenis-pkm"), $formPeninjauFileName);

        $jenisPkm->form_substansi = "upload/jenis-pkm/" . $formSubstansiFileName;
        $jenisPkm->form_administrasi = "upload/jenis-pkm/" . $formAdministrasiFileName;
        $jenisPkm->form_peninjau = "upload/jenis-pkm/" . $formPeninjauFileName;

        $jenisPkm->save();

        return redirect()->back();
    }

    public function update(Request $request, $id){
        $dataUpdate = $request->only(["nama_skema", "singkatan"]);

        $jenisPkm = JenisPkm::find($id);
        $jenisPkm->nama_skema = $dataUpdate['nama_skema'];
        $jenisPkm->singkatan = $dataUpdate['singkatan'];

        if($request->hasFile('form_substansi')){
            $file = $request->file("form_substansi");
            $fileName = $file->getClientOriginalName();

            $tujuan = "upload/jenis-pkm/";

            if($jenisPkm->form_substansi !== null && file_exists($jenisPkm->form_substansi)){
                unlink($jenisPkm->form_substansi);
            }

            $file->move(public_path($tujuan), $fileName);

            $jenisPkm->form_substansi = $tujuan .  $fileName;
        }

        if($request->hasFile('form_administrasi')){
            $file = $request->file("form_administrasi");
            $fileName = $file->getClientOriginalName();

            $tujuan = "upload/jenis-pkm/";

            if($jenisPkm->form_administrasi !== null && file_exists($jenisPkm->form_administrasi)){
                unlink($jenisPkm->form_administrasi);
            }

            $file->move(public_path($tujuan), $fileName);

            $jenisPkm->form_administrasi = $tujuan .  $fileName;
        }

        if($request->hasFile('form_peninjau')){
            $file = $request->file("form_peninjau");
            $fileName = $file->getClientOriginalName();

            $tujuan = "upload/jenis-pkm/";

            if($jenisPkm->form_peninjau !== null && file_exists($jenisPkm->form_peninjau)){
                unlink($jenisPkm->form_peninjau);
            }

            $file->move(public_path($tujuan), $fileName);

            $jenisPkm->form_peninjau = $tujuan .  $fileName;
        }

        $jenisPkm->save();

        return redirect()->back();
    }

    public function delete($id){
        $jenisPkm = JenisPkm::find($id);

        if($jenisPkm->form_peninjau !== null && file_exists($jenisPkm->form_peninjau)){
            unlink($jenisPkm->form_peninjau);
        }

        if($jenisPkm->form_administrasi !== null && file_exists($jenisPkm->form_administrasi)){
            unlink($jenisPkm->form_administrasi);
        }

        if($jenisPkm->form_substansi !== null && file_exists($jenisPkm->form_substansi)){
            unlink($jenisPkm->form_substansi);
        }

        $jenisPkm->delete();

        return redirect()->back();
    }
}
