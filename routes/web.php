<?php

use App\Http\Controllers\JenisSuratController;
use App\Http\Controllers\LoginController;
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

});

