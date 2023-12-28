<?php

namespace App\Http\Controllers\Admin;

use App\Models\DataMahasiswa;
use App\Http\Requests\StoreDataMahasiswaRequest;
use App\Http\Requests\UpdateDataMahasiswaRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DataMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = DataMahasiswa::all();

        return view('admin.data-mahasiswa', [
            "mahasiswa" => $mahasiswa,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDataMahasiswaRequest $request)
    {
        $data = $request->except('_token');

        $mhs = DataMahasiswa::insert($data);

        return redirect()->back();
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDataMahasiswaRequest $request, $nim)
    {
        $data = $request->except('_token', "_method");

        $dataMhs = DataMahasiswa::where('nim', $nim)->first();
        $dataMhs->update($data);
        $dataMhs->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($nim)
    {
        $data = DataMahasiswa::where('nim', $nim)
                ->delete();
        
        return redirect()->back();
    }

    public function apiDataMahasiswa(Request $request){
        $data = DB::table("data_mahasiswa")
            ->select(["data_mahasiswa.id", "data_mahasiswa.nim", "data_mahasiswa.nama"])
            ->leftJoin("ketua_kelompok",  "ketua_kelompok.data_mahasiswa_id", "data_mahasiswa.id")
            ->whereNull("ketua_kelompok.data_mahasiswa_id")
            ->where("keterangan", 1);

        if(!empty($request->search)){
            $search = $request->search;

            $data->where("data_mahasiswa.nim", "like", "%$search%")
            ->orWhere("data_mahasiswa.nama", "like", "%$search%");
        }
        

        $data = $data->get();

        return response()->json([
            "data" => $data
        ]);
    }
}
