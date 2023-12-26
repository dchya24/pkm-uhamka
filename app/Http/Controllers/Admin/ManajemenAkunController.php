<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManajemenAkunController extends Controller
{
    public function administratorPage(){
        return view("admin.manajemen-akun.administrator");
    }

    public function ketuaKelompokPage(){
        return view("admin.manajemen-akun.ketua-kelompok");
    }

    public function peninjauPage(){
        return view("admin.manajemen-akun.peninjau");
    }

    public function warekPage(){
        return view("admin.manajemen-akun.wakil-rektor");
    }
}
