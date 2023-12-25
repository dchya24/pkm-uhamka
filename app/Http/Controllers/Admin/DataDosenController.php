<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DataDosen;

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
}
