<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DataDosenController;
use App\Http\Controllers\Admin\DataMahasiswaController;
use App\Http\Controllers\Admin\AdministratorController;
use App\Http\Controllers\Admin\AksesHalamanController;
use App\Http\Controllers\Admin\JenisPkmController;
use App\Http\Controllers\Admin\KetuaKelompokController;
use App\Http\Controllers\Admin\ManajemenInformasiController;
use App\Http\Controllers\Admin\ManajemenProposal\ManajemenProposalController;
use App\Http\Controllers\Admin\ManajemenProposal\PenilaiAdministrasiController as ManajemenProposalPenilaiAdministrasiController;
use App\Http\Controllers\Admin\ManajemenProposal\PenilaiSubstansiController as ManajemenProposalPenilaiSubstansiController;
use App\Http\Controllers\Admin\ManajemenProposal\PeninjauController as ManajemenProposalPeninjauController;
use App\Http\Controllers\Admin\ManajemenProposal\RekomendasiController;
use App\Http\Controllers\Admin\ManajemenProposal\WarekController as ManajemenProposalWarekController;
use App\Http\Controllers\Admin\PenilaiController;
use App\Http\Controllers\Admin\PeninjauController;
use App\Http\Controllers\Admin\SertifikatController;
use App\Http\Controllers\Admin\WarekController;
use App\Http\Controllers\Administrasi\AdministrasiController;
use App\Http\Controllers\Login\AdministratorLoginController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Login\MahasiswaLoginController;
use App\Http\Controllers\Login\PenilaiLoginController;
use App\Http\Controllers\Login\PeninjauLoginController;
use App\Http\Controllers\Mahasiswa\DashboardController as MahasiswaDashboardController;
use App\Http\Controllers\Mahasiswa\RegisterController;
use App\Http\Controllers\Mahasiswa\UsulanController;
use App\Http\Controllers\PenilaiSubstansiController;
use App\Http\Controllers\Peninjau\PeninjauController as PeninjauPeninjauController;
use App\Http\Controllers\WakilRektorController;
use Illuminate\Support\Facades\Auth;
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
    return redirect()->route("login");
});

Route::get('penilai/dashboard', function(){
    $user = Auth::guard('penilai')->user();

    if($user->jenis_penilai == 1){
        return redirect()->route('penilai-administrasi.dashboard');
    }
    else if($user->jenis_penilai == 2){
        return redirect()->route('penilai-substansi.dashboard');
    }
})->middleware("auth:penilai");

Route::get('admin/dashboard', function(){
    $user = Auth::guard('admin')->user();

    if($user->type == "admin"){
        return redirect()->route('admin.dashboard');
    }
    else if($user->type == "warek"){
        return redirect()->route('wakil-rektor.dashboard');
    }
})->middleware("auth:admin");

Route::post("penilai/logout", [PenilaiLoginController::class, "logout"])
    ->middleware("auth:penilai")
    ->name("penilai.logout");

Route::prefix('login')->group(function () {
    Route::middleware("guest")->get("", [LoginController::class, "index"])->name('login');

    Route::middleware("guest:mahasiswa")->group(function(){
        Route::post("mahasiswa", [MahasiswaLoginController::class, "login"])->name('login.mahasiswa.attempt');
        Route::get("mahasiswa", [MahasiswaLoginController::class, "mahasiswa"])->name('login.mahasiswa');
    });

    Route::middleware(["guest:penilai", "guest:peninjau"])->group(function(){
        Route::post("penilai", [LoginController::class, "loginPenilai"])->name('login.penilai.attempt');
        Route::get("penilai", [LoginController::class, "penilai"])->name('login.penilai');
    });

    Route::middleware(["guest:admin"])->group(function(){
        Route::post("administrator", [AdministratorLoginController::class, "login"])->name('login.administrator.attempt');
        Route::get("administrator", [AdministratorLoginController::class, "administrator"])->name('login.administrator');
    });
});

Route::prefix('register')->middleware("guest")->group(function () {
    Route::get("", [RegisterController::class, "index"])->name('register.index');
    Route::post("verify-nim", [RegisterController::class, "verifyNim"])->name('register.verify-nim');
    Route::post("create-password", [RegisterController::class, "register"])->name('register.create-account');
    Route::get("create-password", [RegisterController::class, "createPasswordPage"])->name('register.create-password');
    Route::get("confirm", [RegisterController::class, "confirmPage"])->name('register.confirm');
});

Route::prefix('administrator')->name('admin.')->middleware("auth:admin")->group(function(){
    Route::post("logout", [AdministratorLoginController::class, "logout"])->name('logout');

    Route::get("dashboard", [AdminController::class, "dashboardPage"])->name("dashboard");

    Route::prefix("informasi")->group(function(){
        Route::post("",[ManajemenInformasiController::class, "store"])->name("informasi.store");
        Route::get("",[ManajemenInformasiController::class, "index"])->name("informasi");
        Route::delete("{id}/delete",[ManajemenInformasiController::class, "delete"])->name("informasi.delete");
        
        Route::put("{id}/update",[ManajemenInformasiController::class, "update"])->name("informasi.update");
    });

    Route::post("akses-halaman", [AksesHalamanController::class, "ubahAksesHalaman"])->name("akses-halaman.update");
    Route::get("akses-halaman", [AdminController::class, "aksesHalamanPage"])->name("akses-halaman");

    Route::prefix("skema-pkm")->name('skema-pkm.')->group(function(){
        Route::post("", [JenisPkmController::class, "store"])->name("store");
        Route::get("", [JenisPkmController::class, "index"])->name("dashboard");
        Route::put("{id}/update", [JenisPkmController::class, "update"])->name("update");
        Route::delete("{id}/delete", [JenisPkmController::class, "delete"])->name("delete");
    });


    Route::post("sertifikat", [SertifikatController::class, "store"])->name("sertifikat.store");
    Route::get("sertifikat", [SertifikatController::class, "index"])->name("sertifikat");
    Route::delete("sertifikat/{id}", [SertifikatController::class, "destroy"])->name("sertifikat.destroy");

    Route::prefix('data-mahasiswa')->group(function(){
        Route::post("", [DataMahasiswaController::class, "store"])->name('data-mahasiswa.store');
        Route::get("", [DataMahasiswaController::class, "index"])->name('data-mahasiswa');
        Route::delete("{nim}/delete", [DataMahasiswaController::class, "delete"])->name('data-mahasiswa.delete');
        Route::put("{nim}/update", [DataMahasiswaController::class, "update"])->name('data-mahasiswa.update');
    });

    Route::prefix('data-dosen')->group(function (){
        Route::post("", [DataDosenController::class, "store"])->name("data-dosen.store");
        Route::get("", [DataDosenController::class, "index"])->name("data-dosen");
        Route::put("{nidn}/update", [DataDosenController::class, "update"])->name("data-dosen.update");
        Route::delete("{nidn}/delete", [DataDosenController::class, "delete"])->name("data-dosen.delete");
    });


    Route::prefix("manajemen-akun")->name('manajemen-akun.')->group(function(){
        Route::prefix("administrator")->group(function(){
            Route::post("", [AdministratorController::class, "store"])->name("administrator.store");
            Route::get("", [AdministratorController::class, "index"])->name("administrator");
            Route::put("{id}/update", [AdministratorController::class, "update"])->name("administrator.update");
            Route::delete("{id}/delete", [AdministratorController::class, "destroy"])->name("administrator.delete");
        });

        Route::prefix("ketua-kelompok")->group(function(){
            Route::post("", [KetuaKelompokController::class, "store"])->name("ketua-kelompok.store");
            Route::get("", [KetuaKelompokController::class, "index"])->name("ketua-kelompok");
            Route::put("{id}/update-password", [KetuaKelompokController::class, "update"])->name("ketua-kelompok.update-password");
            Route::delete("{id}/delete", [KetuaKelompokController::class, "destroy"])->name("ketua-kelompok.delete");
        });

        Route::prefix("penilai")->group(function(){
            Route::post("", [PenilaiController::class, "store"])->name("penilai.store");
            Route::get("", [PenilaiController::class, "index"])->name("penilai");
            Route::put("{id}/update", [PenilaiController::class, "update"])->name("penilai.update");
            Route::delete("{id}/delete", [PenilaiController::class, "destroy"])->name("penilai.delete");
        });


        Route::prefix("peninjau")->group(function(){
            Route::post("", [PeninjauController::class, "store"])->name("peninjau.store");
            Route::get("", [PeninjauController::class, "index"])->name("peninjau");
            Route::put("{id}/update-password", [PeninjauController::class, "update"])->name("peninjau.update-password");
            Route::delete("{id}/delete", [PeninjauController::class, "destroy"])->name("peninjau.delete");
        });

        Route::prefix("wakil-rektor")->group(function(){
            Route::post("", [WarekController::class, "store"])->name("wakil-rektor.store");
            Route::get("", [WarekController::class, "index"])->name("wakil-rektor");
            Route::put("{id}/update", [WarekController::class, "update"])->name("wakil-rektor.update");
            Route::delete("{id}/delete", [WarekController::class, "destroy"])->name("wakil-rektor.delete");
        });
    });

    Route::prefix('manajemen-proposal')->name('manajemen-proposal.')->group( function(){
        Route::get('proposal', [ManajemenProposalController::class, "index"])->name('proposal');

        Route::get('proposal/{id}', function(){
            return view('admin.manajemen-proposal.proposal-detail');
        })->name('proposal-detail');

        Route::get('penilai-substansi', [ManajemenProposalPenilaiSubstansiController::class, "index"])->name('penilai-substansi');
        Route::post('penilai-substansi/{id}', [ManajemenProposalPenilaiSubstansiController::class, "store"])->name('penilai-substansi.store');
        Route::get('penilai-substansi/{id}', [ManajemenProposalPenilaiSubstansiController::class, "show"])->name('penilai-substansi.tambah');
        Route::delete('penilai-substansi/{idUsulan}/delete-penilai', [ManajemenProposalPenilaiSubstansiController::class, "deletePenilai"])->name('penilai-substansi.delete-penilai');

        /**
         * Penilai Administrasi
         */
        Route::get('penilai-administrasi', [ManajemenProposalPenilaiAdministrasiController::class, "index"])->name('penilai-administrasi');
        Route::post('penilai-administrasi/{id}', [ManajemenProposalPenilaiAdministrasiController::class, "store"])->name('penilai-administrasi.store');
        Route::get('penilai-administrasi/{id}', [ManajemenProposalPenilaiAdministrasiController::class, "show"])->name('penilai-administrasi.tambah');
        Route::delete('penilai-administrasi/{idUsulan}/delete-penilai', [ManajemenProposalPenilaiAdministrasiController::class, "deletePenilai"])->name('penilai-administrasi.delete-penilai');

        /**
         * Peninjau
         */
        Route::get('peninjau', [ManajemenProposalPeninjauController::class, "index"])->name('peninjau');

        Route::post('peninjau/{id}', [ManajemenProposalPeninjauController::class, "store"])->name('peninjau.store');

        Route::get('peninjau/{id}', [ManajemenProposalPeninjauController::class, "show"])->name('peninjau.tambah');

        Route::delete('peninjau/{idUsulan}/delete-penilai', [ManajemenProposalPeninjauController::class, "deletePeninjau"])->name('peninjau.delete-peninjau');

        /**
         * Wakil Rektor
         */
        Route::get('wakil-rektor', [ManajemenProposalWarekController::class, "index"])->name('wakil-rektor');

        Route::post('wakil-rektor/{id}', [ManajemenProposalWarekController::class, "store"])->name('wakil-rektor.store');

        Route::get('wakil-rektor/{id}', [ManajemenProposalWarekController::class, "show"])->name('wakil-rektor.tambah');

        Route::delete('wakil-rektor/{idUsulan}/delete-penilai', [ManajemenProposalWarekController::class, "deleteWarek"])->name('wakil-rektor.delete-warek');

        /**
         * Rekomendasi
         */
        Route::put("rekomendasi/{id}", [RekomendasiController::class, "update"])->name("rekomendasi.update");
    });
});

Route::prefix('mahasiswa')->name("mahasiswa.")->middleware("auth:mahasiswa")->group(function(){
    Route::post("logout", [MahasiswaLoginController::class, "logout"])->name("logout");

    Route::get('dashboard', [MahasiswaDashboardController::class, "dashboard"])->name("dashboard");

    Route::get('informasi', [MahasiswaDashboardController::class, "informasi"])->name("informasi");

    Route::get('sertifikat', [MahasiswaDashboardController::class, "sertifikat"])->name("sertifikat");

    Route::post('kirim-usulan', [UsulanController::class, "store"])->name("usulan.store");
    Route::get('kirim-usulan', [UsulanController::class, "showKirimUsulanPage"])->name("kirim-usulan");

    Route::post('kirim-usulan/administrasi/{id}', [UsulanController::class, "pengajuanAdministrasi"])->name("usulan.administrasi");


    Route::get('usulan', [UsulanController::class, "index"])->name("usulan");

    Route::get('profile', [MahasiswaDashboardController::class, "profile"])->name("profile");
    Route::post('update-password', [MahasiswaDashboardController::class, "updatePassword"])->name("update-password");

    Route::get('faq', [MahasiswaDashboardController::class, "faq"])->name("faq");
});



Route::prefix("penilai-substansi")->middleware("auth:penilai")->name("penilai-substansi.")->group(function(){
    Route::get('dashboard', [PenilaiSubstansiController::class, "index"])->name("dashboard");

    Route::get('informasi', [PenilaiSubstansiController::class, "informasi"])->name("informasi");

    Route::get('penilaian-proposal', [PenilaiSubstansiController::class, "penilaian"])->name("penilaian-proposal");
    Route::post('penilaian-proposal/{id}', [PenilaiSubstansiController::class, "tambahPenilaian"])->name("penilaian.tambah-penilaian");
    Route::get('penilaian-proposal/{id}', [PenilaiSubstansiController::class, "detailPenilaian"])->name("penilaian.detail");

    Route::get('profile', [PenilaiSubstansiController::class, "profile"])->name("profile");
    Route::post('update-password', [PenilaiSubstansiController::class, "updatePassword"])->name("ubah-password");

});

Route::prefix("penilai-administrasi")->middleware("auth:penilai")->name("penilai-administrasi.")->group(function(){
    Route::get('dashboard', [AdministrasiController::class, "index"])->name("dashboard");

    Route::get('informasi', [AdministrasiController::class, "informasi"])->name("informasi");

    Route::get('penilaian-proposal', [AdministrasiController::class, "penilaian"])->name("penilaian-proposal");
    Route::post('penilaian-proposal/{id}', [AdministrasiController::class, "tambahPenilaian"])->name("penilaian.tambah-penilaian");
    Route::get('penilaian-proposal/{id}', [AdministrasiController::class, "detailPenilaian"])->name("penilaian.detail");

    Route::get('profile', [AdministrasiController::class, "profile"])->name("profile");
    Route::post('update-password', [AdministrasiController::class, "updatePassword"])->name("ubah-password");

});

Route::prefix("peninjau")
    ->name("reviewer.")
    ->middleware("auth:peninjau")
    ->group(function(){
        Route::get('dashboard', [PeninjauPeninjauController::class, "index"])->name("dashboard");

        Route::get('informasi', [PeninjauPeninjauController::class, "informasi"])->name("informasi");

        Route::get('penilaian-proposal', [PeninjauPeninjauController::class, "penilaian"])->name("penilaian-proposal");

        
        Route::post('penilaian-proposal/{id}', [PeninjauPeninjauController::class, "tambahPenilaian"])->name("penilaian.tambah-penilaian");
        Route::get('penilaian-proposal/{id}', [PeninjauPeninjauController::class, "detailPenilaian"])->name("penilaian.detail");

        Route::get('profile', [PeninjauPeninjauController::class, "profile"])->name("profile");
        Route::post('update-password', [PeninjauPeninjauController::class, "updatePassword"])->name("ubah-password");

        Route::post("logout", [PeninjauLoginController::class, "logout"])->name("logout");
    });


Route::prefix("wakil-rektor")->name("wakil-rektor.")->group(function() {
    Route::post("logout", [AdministratorLoginController::class, "logout"])->name('logout');

    Route::get('dashboard', [WakilRektorController::class, "index"])->name("dashboard");

    Route::get('informasi', [WakilRektorController::class, "informasi"])->name("informasi");

    Route::get('penilaian-proposal', [WakilRektorController::class, "penilaian"])->name("penilaian-proposal");
    
    Route::post('penilaian-proposal/{id}', [WakilRektorController::class, "buatRekomendasi"])->name("penilaian.rekomendasi");
    Route::get('penilaian-proposal/{id}', [WakilRektorController::class, "detailPenilaian"])->name("penilaian.detail");


    Route::get('profile', [WakilRektorController::class, "profile"])->name("profile");
    Route::post('update-password', [WakilRektorController::class, "updatePassword"])->name("ubah-password");
});