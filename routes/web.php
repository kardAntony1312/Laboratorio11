<?php

use Illuminate\Support\Facades\Route;
use App\Models\ListHotel;
use App\Http\Controllers\HotelesController;
use App\Http\Controllers\PromocionesController;
use App\Http\Controllers\EnviosController;

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


Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/hoteles', [HotelesController::class,'index'])->name('hoteles.index');
Route::get('/hoteles/create', [HotelesController::class,'create'])->name('hoteles.creador');
Route::post('/hoteles/store', [HotelesController::class,'store'])->name('hoteles.store');
Route::get('/hoteles/edit/{id}', [HotelesController::class,'edit'])->name('hoteles.edit');
Route::post('/hoteles/update/{id}', [HotelesController::class,'update'])->name('hoteles.update');
Route::get('/hoteles/delete/{id}', [HotelesController::class,'show'])->name('hoteles.kill');
Route::delete('/hoteles/destroy/{id}', [HotelesController::class,'destroy'])->name('hoteles.destroy');


Route::get('/promociones/{id}', [PromocionesController::class,'index'])->name('promociones.index');
Route::post('/promociones/{id}/store', [PromocionesController::class,'store'])->name('promociones.store');


Route::get('/envios/{id}/store', [EnviosController::class,'store'])->name('envios.store');





Route::get('/prohibido', function () {
    return view('welcome');
});



