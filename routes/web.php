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

Route::prefix('admin')->group(function(){
    Route::get("dashboard", function(){
        return view("admin.dashboard");
    });

    Route::get("informasi", function(){
        return view("admin.manajemen-informasi");
    });

    Route::get("akses-halaman", function(){
        return view("admin.akses-halaman");
    });

    Route::get("skema-pkm", function(){
        return view("admin.skema-pkm");
    });
});
