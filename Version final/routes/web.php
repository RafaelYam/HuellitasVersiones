<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MascotaController;
use App\Http\Livewire\ShowRazas;
use App\Http\Livewire\Especies;
use App\Http\Livewire\Adiestracions;
use App\Http\Livewire\Vacunas;
use App\Http\Livewire\Registrar;



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

Route::delete('/eliminar/{id}',[MascotaController::class,'destroy'])->middleware(['auth'])->name('mascota.destroy');

Route::get('/verinfo/{id}',[MascotaController::class,'verinfo'])->name('mascota.verinfo');

Route::get('mascota/{id}/editar',[MascotaController::class,'editar'])->middleware(['auth'])->name('mascota.edit');

Route::get('especie/{id}',[MascotaController::class,'registroid'])->middleware(['auth'])->name('especie.anadir');

Route::post('/create',[MascotaController::class,'store'])->middleware(['auth'])->name('mascota.store');

Route::get('/mascota/{id}',[MascotaController::class,'show'])->middleware(['auth'])->name('mascota.show');

Route::put('/mascota/{id}',[MascotaController::class,'update'])->middleware(['auth'])->name('mascota.update');

Route::get('/lista',[MascotaController::class,'lista'])->name('mascota.lista');

Route::get('/lista/cuidado-general',[MascotaController::class,'cuidadogen'])->name('mascota.cuidadogeneral');

Route::get('/lista/alimento/{id}',[MascotaController::class,'alimento'])->name('mascota.alimento');

Route::get('/enfermedades',[MascotaController::class,'enfermedades'])->name('mascota.sintomas');

Route::get('/adiestracion/{id}',Adiestracions::class)->name('animal.adiestracion');

Route::get('/vacunas/{id}',Vacunas::class)->name('animal.vacunas');

Route::get('/razas',ShowRazas::class);

Route::get('/registrar-mascota',Registrar::class)->middleware(['auth'])->name('registrar.mascota');

Route::get('/especies', Especies::class);






require __DIR__.'/auth.php';
