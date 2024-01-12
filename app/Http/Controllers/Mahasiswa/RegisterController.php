<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\DataMahasiswa;
use App\Models\KetuaKelompok;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(): View {
        return view('register.mahasiswa.verifikasi');
    }

    public function verifyNim(Request $request){
        $nim = $request->nim;

        $checkDataKetua = KetuaKelompok::where("nim", $nim)->first();

        if($checkDataKetua) {
            return redirect()->back()->with("error", "Akun sudah terdaftar");
        };


        $checkDataMahasiswa = DataMahasiswa::where("nim", $nim)
                ->where("keterangan", 1)
                ->first();

        if(!$checkDataMahasiswa){
            return redirect()->back()->with("error", "NIM tidak ditemukan");
        }


        return redirect()->route('register.create-password', ["token" => encrypt($nim)]);
    }

    public function register(Request $request){
        if($request->password != $request->confirm_password){
            return redirect()->back()->with("error", "Password tidak sama");
        }

        $decryptData = decrypt($request->token);

        if($decryptData != $request->nim){
            return redirect()->back()->with("error", "Data tidak valid");
        }

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

        return view('register.mahasiswa.confirm');
    }

    public function createPasswordPage(Request $request): View {
        if(empty($request->token)){
            return abort(401);
        }

        $token = $request->token;
        $nim = decrypt($token);

        $mahasiswa = DataMahasiswa::where("nim", $nim)
                ->where("keterangan", 1)
                ->first();

        if(!$mahasiswa) abort(404); 
        
        return view('register.mahasiswa.create-password', compact("token", "mahasiswa"));
    }

    public function confirmPage(): View {
        return view('register.mahasiswa.confirm');
    }
}
