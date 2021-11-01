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
Route::get(config('laratour.root_path') . '/create', [LaratourController::class,'create'])->name('tour.create');
Route::post(config('laratour.root_path') .'/store', [LaratourController::class,'store'])->name('tour.store');
Route::post(config('laratour.root_path') .'/update/{id}/{element}', [LaratourController::class,'update'])->name('tour.update');
Route::get(config('laratour.root_path') .'/destroy/{id}/{element}', [LaratourController::class,'destroy'])->name('tour.destroy');
Route::get(config('laratour.root_path') .'/switch/mode', [LaratourController::class,'switch_mode'])->name('tour.switch.mode');
