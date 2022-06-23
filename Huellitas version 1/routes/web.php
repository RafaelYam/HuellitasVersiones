<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\UadminController;



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

Route::get('/',[HomeController::class,'index'])->name('welcome');

Route::get('/dashboard',[MascotaController::class,'index']);

Route::get('/perfil',[MascotaController::class,'perfil'])->middleware(['auth'])->name('perfil');

Route::get('/sintomas/{id}',[MascotaController::class,'sintomas'])->name('sintomas');

Route::get('/enfermarse/{id}',[MascotaController::class,'enfermarse'])->name('enfermarse');




Route::delete('/eliminar/{id}',[MascotaController::class,'destroy'])->name('mascota.destroy');

Route::get('/verinfo/{id}',[MascotaController::class,'verinfo'])->name('mascota.verinfo');

Route::get('mascota/{id}/editar',[MascotaController::class,'editar'])->name('mascota.edit');

Route::get('/crear',[MascotaController::class,'create'])->name('mascota.create');

Route::post('/create',[MascotaController::class,'store'])->name('mascota.store');

Route::get('/mascota/{id}',[MascotaController::class,'show'])->name('mascota.show');

Route::put('/mascota/{id}',[MascotaController::class,'update'])->name('mascota.update');

Route::get('/eliminar/{id}',[MascotaController::class,'destroy'])->name('mascota.destroy');

Route::get('/lista',[MascotaController::class,'lista'])->name('mascota.lista');

Route::resource('admin',UadminController::class);






require __DIR__.'/auth.php';
