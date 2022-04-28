<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UploadController;


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
    return view('home');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function(){
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/upload', [App\Http\Controllers\HomeController::class, 'share'])->name('upload');
Route::post('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

Route::get('/explore', [App\Http\Controllers\UploadController::class, 'index'])->name('explore');
Route::get('/share/tambah', [App\Http\Controllers\UploadController::class, 'tambahupload'])->name('tambahupload');
Route::post('/share/simpan', [App\Http\Controllers\UploadController::class, 'simpanupload'])->name('simpanupload');
Route::get('/explore/item/{id}', [App\Http\Controllers\UploadController::class, 'item'])->name('item');
Route::get('/explore/item/download/{id}', [App\Http\Controllers\UploadController::class, 'download'])->name('download');

Route::get('/explore/search', [App\Http\Controllers\UploadController::class, 'search'])->name('search');
});