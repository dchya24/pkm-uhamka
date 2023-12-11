<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(): View {
        return view('register.mahasiswa.verifikasi');
    }

    public function createPasswordPage(): View {
        return view('register.mahasiswa.create-password');
    }

    public function confirmPage(): View {
        return view('register.mahasiswa.confirm');
    }
}
