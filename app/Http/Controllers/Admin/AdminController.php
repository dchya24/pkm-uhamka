<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboardPage(){
        return view("admin.dashboard");
    }

    public function informasiPage(){
        return view("admin.manajemen-informasi");
    }

    public function aksesHalamanPage(){
        return view("admin.akses-halaman");
    }

    public function skemaPkmPage(){
        return view("admin.skema-pkm");
    }

    public function sertifikatPage(){
        return view("admin.sertifikat");
    }

    public function dataDosenPage(){
        return view('admin.data-dosen');
    }
}
