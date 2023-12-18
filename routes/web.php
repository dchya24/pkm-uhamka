<?php

use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Mahasiswa\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('login')->group(function () {
    Route::get("", [LoginController::class, "index"])->name('login.index');
    Route::get("mahasiswa", [LoginController::class, "mahasiswa"])->name('login.mahasiswa');
    Route::get("peninjau", [LoginController::class, "peninjau"])->name('login.peninjau');
    Route::get("administrator", [LoginController::class, "administrator"])->name('login.administrator');
});

Route::prefix('register')->group(function () {
    Route::get("", [RegisterController::class, "index"])->name('register.index');
    Route::get("create-password", [RegisterController::class, "createPasswordPage"])->name('register.create-password');
    Route::get("confirm", [RegisterController::class, "confirmPage"])->name('register.confirm');
});

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get("dashboard", function(){
        return view("admin.dashboard");
    })->name("dashboard");

    Route::get("informasi", function(){
        return view("admin.manajemen-informasi");
    })->name("informasi");

    Route::get("akses-halaman", function(){
        return view("admin.akses-halaman");
    })->name("akses-halaman");

    Route::get("skema-pkm", function(){
        return view("admin.skema-pkm");
    })->name("skema-pkm");

    Route::get("sertifikat", function(){
        return view("admin.sertifikat");
    })->name("sertifikat");

    Route::get("data-mahasiswa", function(){
        return view("admin.data-mahasiswa");
    })->name("data-mahasiswa");

    Route::get("data-dosen", function(){
        return view("admin.data-dosen");
    })->name("data-dosen");

    Route::prefix("manajemen-akun")->name('manajemen-akun.')->group(function(){
        Route::get("administrator", function() {
            return view("admin.manajemen-akun.administrator");
        })->name("administrator");

        Route::get("ketua-kelompok", function() {
            return view("admin.manajemen-akun.ketua-kelompok");
        })->name("ketua-kelompok");

        Route::get("penilai", function() {
            return view("admin.manajemen-akun.penilai");
        })->name("penilai");

        Route::get("peninjau", function() {
            return view("admin.manajemen-akun.peninjau");
        })->name("peninjau");

        Route::get("wakil-rektor", function() {
            return view("admin.manajemen-akun.wakil-rektor");
        })->name("wakil-rektor");
    });

    Route::prefix('manajemen-proposal')->name('manajemen-proposal.')->group( function(){
        Route::get('proposal', function(){
            return view('admin.manajemen-proposal.proposal');
        })->name('proposal');

        Route::get('penilai-administrasi', function(){
            return view('admin.manajemen-proposal.penilai-administrasi');
        })->name('penilai-administrasi');

        Route::get('penilai-substansi', function(){
            return view('admin.manajemen-proposal.penilai-substansi');
        })->name('penilai-substansi');

        Route::get('peninjau', function(){
            return view('admin.manajemen-proposal.peninjau');
        })->name('peninjau');

        Route::get('wakil-rektor', function(){
            return view('admin.manajemen-proposal.wakil-rektor');
        })->name('wakil-rektor');
    });
});
