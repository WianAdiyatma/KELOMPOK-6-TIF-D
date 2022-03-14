<?php

use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/anggota', 'PerpusController@anggota');

// Route::get('/anggota', 'AnggotaController@index');
Route::get('/mahasiswa', [AnggotaController::class, 'index']);
Route::get('/', [AnggotaController::class, 'home']);
Route::get('/buku', [AnggotaController::class, 'buku']);
Route::get('/petugas', [AnggotaController::class, 'petugas']);
