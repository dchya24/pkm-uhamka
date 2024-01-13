<?php

namespace App\Http\Controllers\Admin;

use App\Models\DataMahasiswa;
use App\Http\Requests\StoreDataMahasiswaRequest;
use App\Http\Requests\UpdateDataMahasiswaRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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

    public function importData(Request $request){
        // $request->validate([
        //     'data_mahasiswa' => 'required|mimes:csv,txt|max:10240',
        // ]);
        $mhsFile = $request->file('data_mahasiswa');

        $data = Excel::toArray([], $mhsFile)[0];

        $imported = $this->importDataMahasiswa($data);

        return redirect()->back()->with("success", "Data berhasil diimport");

    }

    public function importDataMahasiswa($data){
        $values = [];
        for($i = 1; $i < count($data); $i++){
            $keterangan = 1;

            if(strtolower($data[$i][4]) == "tidak aktif" || $data[$i][4] == null || $data[$i][4] == ""){
                $keterangan = 0;
            }
            $values[] = [
                "nim" => $data[$i][0],
                "nama" => $data[$i][1],
                "fakultas" => $data[$i][2],
                "prodi" => $data[$i][3],
                "keterangan" => $keterangan,
            ];
        }

        $queryText = "INSERT INTO data_mahasiswa (nim, nama, fakultas, prodi, keterangan) VALUES";

        $placeholders = [];
        foreach ($values as $rowValues) {
            $placeholders[] = '(' . implode(', ', array_fill(0, count($rowValues), '?')) . ')';
        }

        $queryText .= implode(', ', $placeholders);

        // Add ON DUPLICATE KEY UPDATE clause
        $queryText .= "
            ON DUPLICATE KEY UPDATE
            nama = VALUES(nama),
            keterangan = VALUES(keterangan)
        ";

        // Flatten the values array to pass it to the statement
        $flatValues = array_merge(...array_map('array_values', $values));

        // Execute the query with the flattened values array
        DB::statement($queryText, $flatValues);
    }
}
