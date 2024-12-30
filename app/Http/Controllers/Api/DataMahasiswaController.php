<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DataMahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataMahasiswaController extends Controller
{
    public function getApi(Request $request){
        $limit = $request->input("length", 10);

        $data = DB::table("data_mahasiswa")
            ->select("data_mahasiswa.*")
            ->orderBy("data_mahasiswa.id", "desc");

        $count = $data->count();

        $search = $request->input("search.value");

        $data->offset($request->input("start", 0));

        if($search){
            $data->where(function($query) use ($search){
                $query->where("nama", "like", "%$search%")
                    ->orWhere("nim", "like", "%$search%")
                    ->orWhere("prodi", "like", "%$search%")
                    ->orWhere("fakultas", "like", "%$search%");
            });
        }

        $mahasiswa = $data->limit($limit)
                    ->get();

        return response()->json([
            "message" => "Success",
            "data" => [
                "draw" => $request->draw,
                "data" => $mahasiswa,
                "recordsTotal" => $count,
                "recordsFiltered" => count($mahasiswa),
            ]
        ]);
    }
}
