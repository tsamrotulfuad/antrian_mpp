<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OpdController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AntrianController;

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
Route::post('/dpmptsp', [HomeController::class, 'dpmptsp_store']);

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/postlogin', 'App\Http\Controllers\LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

//middleware admin
Route::group(['middleware' => ['auth','cekrole:admin']], function(){
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    });
    
    Route::get('/getLayanan/{id}', function($id){
        $layanan = App\Models\Layanan::where('opd_id', $id)->get();
        return response()->json($layanan);
    });
    
    Route::resource('opds', OpdController::class);
    Route::resource('layanans', LayananController::class);
    Route::resource('petugas', PetugasController::class);
    Route::resource('users', UserController::class);
    Route::resource('antrians', AntrianController::class);
});

Route::group(['middleware' => ['auth','cekrole:admin,petugas']], function(){
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    });
    
    Route::resource('antrians', AntrianController::class);

});