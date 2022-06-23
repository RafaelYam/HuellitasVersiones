<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MascotaController;
use App\Http\Livewire\ShowRazas;
use App\Http\Livewire\Especies;



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

Route::get('/dashboard',[HomeController::class,'index'])->name('welcome');

Route::get('/perfil',[MascotaController::class,'perfil'])->middleware(['auth'])->name('perfil');

Route::get('/sintomas/{id}',[MascotaController::class,'sintomas'])->name('sintomas');

Route::get('/enfermarse/{id}',[MascotaController::class,'enfermarse'])->name('enfermarse');




Route::delete('/eliminar/{id}',[MascotaController::class,'destroy'])->middleware(['auth'])->name('mascota.destroy');

Route::get('/verinfo/{id}',[MascotaController::class,'verinfo'])->name('mascota.verinfo');

Route::get('mascota/{id}/editar',[MascotaController::class,'editar'])->middleware(['auth'])->name('mascota.edit');

Route::get('/crear',[MascotaController::class,'create'])->middleware(['auth'])->name('mascota.create');

Route::post('/create',[MascotaController::class,'store'])->middleware(['auth'])->name('mascota.store');

Route::get('/mascota/{id}',[MascotaController::class,'show'])->middleware(['auth'])->name('mascota.show');

Route::put('/mascota/{id}',[MascotaController::class,'update'])->middleware(['auth'])->name('mascota.update');

Route::get('/lista',[MascotaController::class,'lista'])->name('mascota.lista');

Route::get('/lista/cuidado-especial',[MascotaController::class,'cuidado'])->name('mascota.cuidado');

Route::get('/lista/cuidado-general',[MascotaController::class,'cuidadogen'])->name('mascota.cuidadogeneral');

Route::get('/lista/alimento/{id}',[MascotaController::class,'alimento'])->name('mascota.alimento');

Route::get('/enfermedades',[MascotaController::class,'enfermedades'])->name('mascota.sintomas');

Route::get('/adiestracion/{id}',[MascotaController::class,'adiestracion'])->name('animal.adiestracion');

Route::get('/razas',ShowRazas::class);

Route::get('especies', Especies::class);




require __DIR__.'/auth.php';
