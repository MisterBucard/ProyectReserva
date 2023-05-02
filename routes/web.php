<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HabitacionController;//esto es muy importante ojo
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

//Ruta de CREAR habitaciones
//las rutas actualizadas 
//Grupo de Rutas para estudiante: Operaciones CRUD (Read:lectura)
Route::get('/habitaciones', [HabitacionController::class,'index'])->name('habitacion.index');

//Ruta para mostrar un solo estudiante: READ o lectura de estudiantes
Route::get('/habitacion/{id}', [HabitacionController::class,'show'])->name('habitacion.show')->where('id', '[0-9]+');


//Ruta de CREAR estudiante

Route::get('/habitaciones/crear', [HabitacionController::class,'create']) ->name('habitacion.create');

//segunda ruta de crear estudiante con metodo post (ruta que recibe el formulario)
Route::post('/habitaciones/crear', [HabitacionController::class,'store'])
    ->name('habitacion.store');

//Ruta mostrar formulario editar estudiante/actualizar
Route::get('/habitaciones/{id}/editar', [HabitacionController::class,'edit'])
    ->name('habitacion.edit')->where('id', '[0-9]+');

Route::put('/habitaciones/{id}/editar', [HabitacionController::class,'update'])
    ->name('habitacion.update')->where('id', '[0-9]+');

//Ruta para ELIMINAR
Route::delete('/habitaciones/{id}/borrar', [HabitacionController::class,'destroy'])
    ->name('habitacion.destroy')->where('id', '[0-9]+');

