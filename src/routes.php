<?php


use Illuminate\Support\Facades\Route;
use Mprince\Laratour\Controllers\LaratourController;

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

Route::get(config('laratour.root_path'), [LaratourController::class,'index'])->name('tour.index');
Route::post(config('laratour.root_path') .'/store', [LaratourController::class,'store'])->name('tour.store');
