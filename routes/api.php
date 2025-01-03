<?php

use App\Http\Controllers\Admin\DataDosenController;
use App\Http\Controllers\Admin\DataMahasiswaController;
use App\Http\Controllers\Api\DataMahasiswaController as ApiDataMahasiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("dosen", [DataDosenController::class, "apiDataDosen"]);
Route::get("mahasiswa", [DataMahasiswaController::class, "apiDataMahasiswa"]);
Route::get("data-mahasiswa", [ApiDataMahasiswaController::class, "getApi"])->name("api.data.mahasiswa");
