<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Administrator;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function index(){
        $data = Administrator::where("type", "admin")->get();
        return view("admin.manajemen-akun.administrator", [
            "data" => $data
        ]);
    }

    public function store(Request $request){
        $data = $request->only("username", "nama", "password");
        $data['password'] = bcrypt($data['password']);
        $data['type'] = "admin";

        $insert = Administrator::insert($data);

        if(!$insert){
            abort(502);
        }

        return redirect()->back();
    }

    public function update(Request $request, $id){
        $data = $request->only(["username", "nama"]);
        
        if(strlen($request->password) >= 6){
            $password = bcrypt($request->password);
            $data['password'] = $password;
        }

        $administrator = Administrator::find($id);
        $administrator->update($data);
        $administrator->save();

        return redirect()->back();
    }

    public function destroy($id){
        Administrator::destroy($id);

        return redirect()->back();
    }
}
