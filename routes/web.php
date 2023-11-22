<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserBerandaController;
use App\Http\Controllers\UserTentangController;

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

Route::middleware('auth')->group(function(){
    Route::get('admin', function () {
        return view('admin.admins');
    });
    Route::get('admin/berita', [NewsController::class, 'show']);
    Route::get('admin/berita/add', [NewsController::class, 'add']);
    Route::post('admin/berita/create', [NewsController::class, 'create']);
    Route::get('admin/berita/edit/{id}', [NewsController::class, 'edit']);
    Route::post('admin/berita/update/{id}', [NewsController::class, 'update']);
    Route::get('admin/berita/delete/{id}', [NewsController::class, 'delete']);

    Route::get('admin/galeri', [ProductController::class, 'show']);
    Route::get('admin/galeri/add', [ProductController::class, 'add']);
    Route::post('admin/galeri/create', [ProductController::class, 'create']);
    Route::get('admin/galeri/edit/{id}', [ProductController::class, 'edit']);
    Route::post('admin/galeri/update/{id}', [ProductController::class, 'update']);
    Route::get('admin/galeri/delete/{id}', [ProductController::class, 'delete']);

    Route::get('admin/kontak', [ContactController::class, 'show']);
    Route::get('admin/kontak/delete/{id}', [ContactController::class, 'delete']);

    Route::get('admin/tentang', [AboutController::class, 'index'])->name('admin.tentang');
    Route::get('admin/tentang/edit/{id}', [AboutController::class, 'edit'])->name('tentang.edit');
    Route::put('admin/tentang/{id}', [AboutController::class, 'update'])->name('tentang.update');
    

});
    Route::post('kontak/create', [ContactController::class,'create']);

Route::get('/', [HomeController::class, 'show']);

Route::get('galeri', [ProductController::class, 'tampil']);

Route::get('berita', [NewsController::class, 'tampil']);
Route::get('berita/{id}', [NewsController::class, 'detail']);

Route::get('tentang', [AboutController::class, 'show']);

Route::get('kontak', function () {
    return view('kontak');
});

Route::get('login', [UserController::class,'login'])->name('login');
Route::post('login', [UserController::class,'auth'])->name('auth');
Route::get('register', [UserController::class,'register'])->name('register');
Route::post('register/create', [UserController::class,'create']);
Route::post('logout', [UserController::class,'logout']);

Route::get('berandaa', [UserBerandaController::class, 'show']);
Route::get('tentangg', [UserTentangController::class, 'show']);