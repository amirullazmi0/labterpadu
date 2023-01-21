<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuperController;

/*
|--------------------------------------------------------------------------
| Web Routes    
|---------------------------------------    -----------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UserController::class, 'index']);
Route::get('/home', [UserController::class, 'index']);

Route::get('/daftar-ruangan', [UserController::class, 'ruangan']);
Route::get('/daftar-ruangan/{ruangan:name}', [UserController::class, 'show_ruangan']);

Route::get('/daftar-alat/{lab:id}', [UserController::class, 'alat']);
Route::get('/daftar-alat/{alat:name}', [UserController::class, 'show_alat']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout']);


Route::middleware(['auth', 'super:0'])->group(function () {
    Route::get('/register', [LoginController::class, 'register']);
    Route::post('/registerdosen', [LoginController::class, 'storedosen']);
    Route::post('/registerlaboran', [LoginController::class, 'storelaboran']);

    Route::get('/admin', [SuperController::class, 'index']);
    Route::get('/admin/profil/{user:name}', [SuperController::class, 'profil']);
    Route::post('/admin/password/{user:name}/update', [SuperController::class, 'update_password']);

    Route::get('/admin/laboratorium', [SuperController::class, 'lab']);
    Route::get('/admin/laboratorium/{lab:name}', [SuperController::class, 'show_lab']);
    Route::get('/admin/laboratorium/{lab:name}/edit', [SuperController::class, 'edit_lab']);
    Route::post('/admin/laboratorium/{lab:id}/update', [SuperController::class, 'update_lab']);

    Route::get('/admin/dosen', [SuperController::class, 'dosen']);
    Route::get('/admin/add-dosen', [SuperController::class, 'add_dosen']);
    Route::get('/admin/dosen/{user:name}', [SuperController::class, 'show_dosen']);
    Route::get('/admin/dosen/{user:name}/edit', [SuperController::class, 'edit_dosen']);
    Route::post('/admin/dosen/{user:id}/update', [SuperController::class, 'update_dosen']);
    Route::get('/admin/dosen/delete/{user:nip}', [SuperController::class, 'destroy_dosen']);

    Route::get('/admin/laboran', [SuperController::class, 'laboran']);
    Route::get('/admin/add-laboran', [SuperController::class, 'add_laboran']);
    Route::get('/admin/laboran/{user:name}', [SuperController::class, 'show_laboran']);
    Route::get('/admin/laboran/{user:name}/edit', [SuperController::class, 'edit_laboran']);
    Route::post('/admin/laboran/{user:id}/update', [SuperController::class, 'update_laboran']);
    Route::get('/admin/laboran/delete/{user:nip}', [SuperController::class, 'destroy_laboran']);

    Route::get('/admin/ruangan', [SuperController::class, 'ruangan']);
    Route::get('/admin/add-ruangan', [SuperController::class, 'add_ruangan']);
    Route::post('/admin/store-ruangan', [SuperController::class, 'store_ruangan']);
    Route::get('/admin/ruangan/{ruangan:id}', [SuperController::class, 'show_ruangan']);
    Route::get('/admin/ruangan/{ruangan:id}/edit', [SuperController::class, 'edit_ruangan']);
    Route::post('/admin/ruangan/{ruangan:id}/update', [SuperController::class, 'update_ruangan']);
    Route::get('/admin/ruangan/delete/{ruangan:id}', [SuperController::class, 'destroy_ruangan']);

    Route::get('/admin/p-ruangan', [SuperController::class, 'p_ruangan']);
    Route::get('/admin/add-p-ruangan', [SuperController::class, 'add_p_ruangan']);
    Route::post('/admin/store-p-ruangan', [SuperController::class, 'store_p_ruangan']);
    Route::get('/admin/p-ruangan/{p_ruangan:id}', [SuperController::class, 'show_p_ruangan']);
    Route::get('/admin/p-ruangan/{p_ruangan:id}/edit', [SuperController::class, 'edit_p_ruangan']);
    Route::post('/admin/p-ruangan/{p_ruangan:id}/update', [SuperController::class, 'update_p_ruangan']);
    Route::get('/admin/p_ruangan/delete/{p_ruangan:id}', [SuperController::class, 'destroy_p_ruangan']);
});
// SUPERADMIN

Route::middleware(['auth', 'admin:1', 'admin:2'])->group(function () {
    Route::get('/aadmin', [AdminController::class, 'index']);
    Route::get('/aadmin/profil/{user:name}', [AdminController::class, 'profil']);
    Route::post('/aadmin/profil/{user:nip}/update', [AdminController::class, 'update_profil']);
    Route::post('/aadmin/password/{user:name}/update', [AdminController::class, 'update_password']);

    Route::get('/aadmin/laboratorium', [AdminController::class, 'lab']);
    Route::get('/aadmin/laboratorium/{lab:name}/edit', [AdminController::class, 'edit_lab']);
    Route::post('/aadmin/laboratorium/{lab:id}/update', [AdminController::class, 'update_lab']);

    Route::get('/aadmin/laboratorium/alat', [AdminController::class, 'alat']);
    Route::get('/aadmin/laboratorium/add-alat', [AdminController::class, 'add_alat']);
    Route::post('/aadmin/laboratorium/store-alat', [AdminController::class, 'store_alat']);
    Route::get('/aadmin/laboratorium/alat/{alat:name}', [AdminController::class, 'show_alat']);
    Route::get('/aadmin/laboratorium/alat/{alat:name}/edit', [AdminController::class, 'edit_alat']);
    Route::post('/aadmin/laboratorium/alat/{alat:id}/update', [AdminController::class, 'update_alat']);
    Route::get('/aadmin/laboratorium/alat/delete/{alat:id}', [AdminController::class, 'destroy_alat']);

    Route::get('/aadmin/laboratorium/p-alat', [AdminController::class, 'p_alat']);
    Route::get('/aadmin/laboratorium/add-p-alat', [AdminController::class, 'add_p_alat']);
    Route::post('/aadmin/laboratorium/store-p-alat', [AdminController::class, 'store_p_alat']);
    Route::get('/aadmin/laboratorium/p-alat/{p_alat:id}', [AdminController::class, 'show_p_alat']);
    Route::get('/aadmin/laboratorium/p-alat/{p_alat:id}/edit', [AdminController::class, 'edit_p_alat']);
    Route::post('/aadmin/laboratorium/p-alat/{p_alat:id}/update', [AdminController::class, 'update_p_alat']);
    Route::get('/aadmin/laboratorium/p-alat/delete/{p_alat:id}', [AdminController::class, 'destroy_p_alat']);
});
