<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'admin'])->get('/user',
[UserController::class, 'index']);
Route::middleware(['auth', 'admin'])->get('/user/create',
[UserController::class, 'create']);
Route::middleware(['auth', 'admin'])->post('/user/store',
[UserController::class, 'store']);
Route::middleware(['auth', 'admin'])->get('/user/edit/{id}',
[UserController::class, 'edit']);
Route::middleware(['auth', 'admin'])->post('/user/update/{id}',
[UserController::class, 'update']);
Route::middleware(['auth', 'admin'])->post('/user/destroy/{id}',
[UserController::class, 'destroy']);

Route::middleware(['auth', 'admin'])->get('/karyawan',
[KaryawanController::class, 'index']);
Route::middleware(['auth', 'admin'])->get('/karyawan/create',
[KaryawanController::class, 'create']);
Route::middleware(['auth', 'admin'])->post('/karyawan/store',
[KaryawanController::class, 'store']);
Route::middleware(['auth', 'admin'])->get('/karyawan/edit/{id}',
[KaryawanController::class, 'edit']);
Route::middleware(['auth', 'admin'])->post('/karyawan/update/{id}',
[KaryawanController::class, 'update']);
Route::middleware(['auth', 'admin'])->post('/karyawan/destroy/{id}',
[KaryawanController::class, 'destroy']);

Route::middleware(['auth', 'admin'])->get('/jabatan',
[JabatanController::class, 'index']);
Route::middleware(['auth', 'admin'])->get('/jabatan/create',
[JabatanController::class, 'create']);
Route::middleware(['auth', 'admin'])->post('/jabatan/store',
[JabatanController::class, 'store']);
Route::middleware(['auth', 'admin'])->get('/jabatan/edit/{id}',
[JabatanController::class, 'edit']);
Route::middleware(['auth', 'admin'])->post('/jabatan/update/{id}',
[JabatanController::class, 'update']);
Route::middleware(['auth', 'admin'])->post('/jabatan/destroy/{id}',
[JabatanController::class, 'destroy']);


Route::middleware(['auth', 'admin'])->get('/divisi',
[DivisiController::class, 'index']);
Route::middleware(['auth', 'admin'])->get('/divisi/create',
[DivisiController::class, 'create']);
Route::middleware(['auth', 'admin'])->post('/divisi/store',
[DivisiController::class, 'store']);
Route::middleware(['auth', 'admin'])->get('/divisi/edit/{id}',
[DivisiController::class, 'edit']);
Route::middleware(['auth', 'admin'])->post('/divisi/update/{id}',
[DivisiController::class, 'update']);
Route::middleware(['auth', 'admin'])->post('/divisi/destroy/{id}',
[DivisiController::class, 'destroy']);
