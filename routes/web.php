<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DataMahasiswaController;
use App\Http\Controllers\Admin\ManajemenAkunController;
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
    Route::get("dashboard", [AdminController::class, "dashboardPage"])->name("dashboard");

    Route::get("informasi",[AdminController::class, "informasiPage"])->name("informasi");

    Route::get("akses-halaman", [AdminController::class, "aksesHalamanPage"])->name("akses-halaman");

    Route::get("skema-pkm", [AdminController::class, "skemaPkmPage"])->name("skema-pkm");

    Route::get("sertifikat", function(){
        return view("admin.sertifikat");
    })->name("sertifikat");

    Route::prefix('data-mahasiswa')->group(function(){
        Route::post("", [DataMahasiswaController::class, "store"])->name('data-mahasiswa.store');
        Route::get("", [DataMahasiswaController::class, "index"])->name('data-mahasiswa');
        Route::delete("{nim}/delete", [DataMahasiswaController::class, "delete"])->name('data-mahasiswa.delete');
        Route::put("{nim}/update", [DataMahasiswaController::class, "update"])->name('data-mahasiswa.update');
    });

    Route::get("data-dosen", [AdminController::class, "dataDosenPage"])->name("data-dosen");

    Route::prefix("manajemen-akun")->name('manajemen-akun.')->group(function(){
        Route::get("administrator", [ManajemenAkunController::class, "administratorPage"])->name("administrator");

        Route::get("ketua-kelompok", [ManajemenAkunController::class, "ketuaKelompokPage"])->name("ketua-kelompok");

        Route::get("penilai", [ManajemenAkunController::class, "penilaiPage"])->name("penilai");

        Route::get("peninjau", [ManajemenAkunController::class, "peninjauPage"])->name("peninjau");

        Route::get("wakil-rektor", [ManajemenAkunController::class, "warekPage"])->name("wakil-rektor");
    });

    Route::prefix('manajemen-proposal')->name('manajemen-proposal.')->group( function(){
        Route::get('proposal', function(){
            return view('admin.manajemen-proposal.proposal');
        })->name('proposal');

        Route::get('proposal/{id}', function(){
            return view('admin.manajemen-proposal.proposal-detail');
        })->name('proposal-detail');

        Route::get('penilai-administrasi', function(){
            return view('admin.manajemen-proposal.penilai-administrasi');
        })->name('penilai-administrasi');

        Route::get('penilai-administrasi/{id}', function(){
            return view('admin.manajemen-proposal.tambah-penilai-administrasi');
        })->name('penilai-administrasi.tambah');

        Route::get('penilai-substansi', function(){
            return view('admin.manajemen-proposal.penilai-substansi');
        })->name('penilai-substansi');

        Route::get('penilai-substansi/{id}', function(){
            return view('admin.manajemen-proposal.tambah-penilai-substansi');
        })->name('penilai-substansi.tambah');

        Route::get('peninjau', function(){
            return view('admin.manajemen-proposal.peninjau');
        })->name('peninjau');

        Route::get('peninjau/{id}', function(){
            return view('admin.manajemen-proposal.tambah-peninjau');
        })->name('peninjau.tambah');

        Route::get('wakil-rektor', function(){
            return view('admin.manajemen-proposal.wakil-rektor');
        })->name('wakil-rektor');

        Route::get('wakil-rektor/{id}', function(){
            return view('admin.manajemen-proposal.tambah-wakil-rektor');
        })->name('wakil-rektor.tambah');
    });
});

Route::prefix('mahasiswa')->name("mahasiswa.")->group(function(){
    Route::get('dashboard', function(){
        return view("mahasiswa.dashboard");
    })->name("dashboard");

    Route::get('informasi', function(){
        return view("mahasiswa.informasi");
    })->name("informasi");

    Route::get('sertifikat', function(){
        return view("mahasiswa.sertifikat");
    })->name("sertifikat");

    Route::get('kirim-usulan', function(){
        return view("mahasiswa.kirim-usulan");
    })->name("kirim-usulan");

    Route::get('profile', function(){
        return view("mahasiswa.profile");
    })->name("profile");

    Route::get('faq', function(){
        return view("mahasiswa.faq");
    })->name("faq");
});

Route::prefix("penilai-administrasi")->name("penilai-administrasi.")->group(function(){
    Route::get('dashboard', function(){
        return view("penilai-administrasi.dashboard");
    })->name("dashboard");

    Route::get('informasi', function(){
        return view("penilai-administrasi.informasi");
    })->name("informasi");

    Route::get('penilaian-proposal', function(){
        return view("penilai-administrasi.penilaian-proposal");
    })->name("penilaian-proposal");

    Route::get('profile', function(){
        return view("penilai-administrasi.profile");
    })->name("profile");
});

Route::prefix("reviewer")->name("reviewer.")->group(function(){
    Route::get('dashboard', function(){
        return view("reviewer.dashboard");
    })->name("dashboard");

    Route::get('informasi', function(){
        return view("reviewer.informasi");
    })->name("informasi");

    Route::get('penilaian-proposal', function(){
        return view("reviewer.penilaian-proposal");
    })->name("penilaian-proposal");

    Route::get('profile', function(){
        return view("reviewer.profile");
    })->name("profile");
});
