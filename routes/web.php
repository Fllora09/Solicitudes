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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('dependencias', [App\Http\Controllers\DependenciaController::class, 'index'])->name('dependencias.index');
Route::get('dependencias/create', [App\Http\Controllers\DependenciaController::class, 'create'])->name('dependencias.create');
Route::post('dependencias/store', [App\Http\Controllers\DependenciaController::class, 'store'])->name('dependencias.store');
// Route::resource('dependencias', App\Http\Controllers\DependenciaController::class);
