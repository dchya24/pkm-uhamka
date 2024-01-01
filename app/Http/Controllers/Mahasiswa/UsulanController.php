<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\DataMahasiswa;
use App\Models\JenisPkm;
use Illuminate\Http\Request;

class UsulanController extends Controller
{
    public function showKirimUsulanPage(){
        $dataMahasiswa = DataMahasiswa::where('keterangan', 1)->get();
        $jenisPkm = JenisPkm::all();

        return view("mahasiswa.kirim-usulan", compact("dataMahasiswa", "jenisPkm"));
    }

    public function store(Request $request){
        dd($request->all());

        // TODO Create database
        // TODO validate data

        // TODO insert Data
    }
}
