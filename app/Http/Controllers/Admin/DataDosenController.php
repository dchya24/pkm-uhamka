<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DataDosen;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class DataDosenController extends Controller
{
    public function index(){
        $dataDosen = DataDosen::all();

        return view('admin.data-dosen', [
            "data" => $dataDosen
        ]);
    }

    public function store(Request $request){
        $reqBody = $request->except("_token");

        $createDataDosen = DataDosen::insert($reqBody);

        if($createDataDosen){
            return redirect()->back();
        }

        abort(500);
    }

    public function delete($nidn){
        DataDosen::where('nidn', $nidn)
        ->delete();

        return redirect()->back();
    }

    public function update(Request $request,  $nidn){
        $data = $request->except(["_token", "_method"]);

        $dataDosen = DataDosen::where("nidn", $nidn)->first();
        $dataDosen->update($data);
        $dataDosen->save();

        return redirect()->back();
    }

    public function apiDataDosen(Request $request){
        $data = DB::table("data_dosen")
            ->select(["data_dosen.id", "data_dosen.nidn", "data_dosen.nama"])
            ->leftJoin("peninjau",  "peninjau.data_dosen_id", "data_dosen.id")
            ->whereNull("peninjau.data_dosen_id")
            ->where("keterangan", 1);

        if(!empty($request->search)){
            $search = $request->search;

            $data->where("data_dosen.nidn", "like", "%$search%");
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
        $mhsFile = $request->file('data_dosen');

        $data = Excel::toArray([], $mhsFile)[0];

        $imported = $this->importDataDosen($data);

        return redirect()->back()->with("success", "Data berhasil diimport");

    }

    public function importDataDosen($data){
        $values = [];
        for($i = 1; $i < count($data); $i++){
            $keterangan = 1;

            if(strtolower($data[$i][4]) == "tidak aktif" || $data[$i][4] == null || $data[$i][4] == ""){
                $keterangan = 0;
            }
            $values[] = [
                "nidn" => $data[$i][0],
                "nama" => $data[$i][1],
                "fakultas" => $data[$i][2],
                "prodi" => $data[$i][3],
                "keterangan" => $keterangan,
            ];
        }

        $queryText = "INSERT INTO data_dosen (nidn, nama, fakultas, prodi, keterangan) VALUES";

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
