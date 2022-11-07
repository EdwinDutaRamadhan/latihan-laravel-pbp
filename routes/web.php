<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaModelController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tampil_mahasiswa', [MahasiswaModelController::class, 'getAll']);
Route::get('/get_data', [MahasiswaModelController::class, 'getAll']);
Route::get('/get_mahasiswa_id',[MahasiswaModelController::class, 'getSingle']);
Route::get('/get_mahasiswa_id/{q}',[MahasiswaModelController::class, 'getSingle']);