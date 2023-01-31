<?php

use Illuminate\Support\Facades\Route;
use App\Notifications\NuevaSolicitudCreada;
use Illuminate\Routing\RouteGroup;

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

// require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {

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

    //Hacer Solicitudes
    Route::get('solicitudes/crear', [App\Http\Controllers\SolicitudeController::class, 'create'])->name('solicitudes.create');
    Route::post('solicitudes/store', [App\Http\Controllers\SolicitudeController::class, 'store'])->name('solicitudes.store');
    //se crea la notificacion en el email que diga que una solicitud fue creada
    Route::get('solicitudes', [App\Http\Controllers\SolicitudeController::class, 'index'])->name('solicitudes.index');

    Route::get('inicio', function(){
        $user = App\Models\User::first();
        $user->notify(new NuevaSolicitudCreada("Un nuevo usuario ha dejado una solicitud."));
        return view('home');

        // $solicitude = notify(new NuevaSolicitudCreada());
    })->name('notificacion');

    Route::get('solicitudes/detalles/{id}', [App\Http\Controllers\SolicitudeController::class, 'show'])->name('solicitudes.show');
    // Route::patch('solicitud/actualizar', [App\Http\Controllers\SolicitudeController::class, 'update'])->name('users.update');

});

