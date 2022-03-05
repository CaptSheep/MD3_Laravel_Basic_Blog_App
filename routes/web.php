<?php

use App\Http\Controllers\BlogController;
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
    return view('welcome');
});
Route::get('/index',[BlogController::class,'index'])->name('index');
Route::get('/create',[BlogController::class,'create'])->name('create');
Route::post('/create',[BlogController::class,'store'])->name('store');
Route::get('/index/{id}/show',[BlogController::class,'show'])->name('show');
Route::get('/index/{id}/update',[BlogController::class,'edit'])->name('edit');
Route::post('/index/{id}/update',[BlogController::class,'update'])->name('update');
Route::get('/index/{id}/destroy',[BlogController::class,'destroy'])->name('destroy');
