<?php

use App\Http\Controllers\JenisSuratController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TabeluserController;
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

Route::get('/login', [LoginController::class,'FormLogin'])->name('login.form');

Route::prefix('/jenissurat')->group(function(){
    //http://localhost:8000/jenissurat/
    Route::get('/',[JenisSuratController::class,'index'])->name('jenissurat.index');
    Route::get('/tambah',[JenisSuratController::class,'formTambah'])->name('jenissurat.tambah');
    Route::post('/simpan',[JenisSuratController::class,'simpan'])->name('jenissurat.simpan');
    Route::get('/edit/{id}',[JenisSuratController::class,'formEdit'])->name('jenissurat.edit');
    Route::post('/hapus',[JenisSuratController::class,'hapus'])->name('jenissurat.hapus');
});

Route::prefix('/user')->group(function(){
    //http://localhost:8000/user/
    Route::get('/',[TabeluserController::class,'index'])->name('user.index');
    Route::get('/tambahuser',[TabeluserController::class,'tambahuser'])->name('user.tambah');
    Route::post('/saveuser',[TabeluserController::class,'saveuser'])->name('user.saveuser');
});
