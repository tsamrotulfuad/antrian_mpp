<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OpdController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::post('/dpmptsp', [HomeController::class, 'dpmptsp']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

Route::get('/list-antrian', function () {
    return view('backend.list-antrian');
});

Route::get('/getLayanan/{id}', function($id){
    $layanan = App\Models\Layanan::where('opd_id', $id)->get();
    return response()->json($layanan);
});

Route::resource('opds', OpdController::class);
Route::resource('layanans', LayananController::class);
Route::resource('petugas', PetugasController::class);