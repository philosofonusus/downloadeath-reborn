<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/file-upload', function () {
    return view('upload');
})->name('uploads');
Route::get('/file', [App\Http\Controllers\FilesController::class, 'list'])->name('list');
Route::post('/file/upload', [App\Http\Controllers\FilesController::class, 'upload'])->name('upload');
