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
    return view('auth.login');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Dependencias
Route::get('dependencias', [App\Http\Controllers\DependenciaController::class, 'index'])->name('dependencias.index');
Route::get('dependencias/create', [App\Http\Controllers\DependenciaController::class, 'create'])->name('dependencias.create');
Route::post('dependencias/store', [App\Http\Controllers\DependenciaController::class, 'store'])->name('dependencias.store');
Route::get('dependencias/edit/{IdDp}', [App\Http\Controllers\DependenciaController::class, 'edit'])->name('dependencias.edit');
Route::patch('dependencias/actualizar', [App\Http\Controllers\DependenciaController::class, 'update'])->name('dependencias.update');
Route::post('dependencias/eliminar/{IdDp}', [App\Http\Controllers\DependenciaController::class, 'destroy'])->name('dependencias.destroy');

// Usuarios
Route::get('usuarios', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('usuarios/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
//Route::get('usuarios/editar/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
Route::patch('usuarios/actualizar', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::post('usuarios/eliminar/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');


// Registration
Route::get('usuarios/crear', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('usuarios/registrar', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');



