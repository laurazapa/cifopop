<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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
// ruta para la portada
Route::get('/', [WelcomeController::class, 'index'])
    ->name('portada');

//formulario de confirmación de eliminación, que no se crea por defecto con el resource
Route::get('users/{user}/delete', [UserController::class, 'delete'])
    ->name('users.delete');
    
//CRUD DE USUARIOS
Route::resource('/users', UserController::class); //automaticamente mapea las rutas y sus nombres

// ruta para buscar anuncios
Route::match(['GET', 'POST'], '/anuncios/search', [AnuncioController::class, 'search'])
->name('anuncios.search');

//eliminar permanentemente un anuncio
Route::get('anuncios/{anuncio}/forcedelete', [AnuncioController::class, 'forcedelete'])
    ->name('anuncios.forcedelete');   

//restaurar un anuncio
Route::get('anuncios/{anuncio}/restore', [AnuncioController::class, 'restore'])
    ->name('anuncios.restore');
        
    
//formulario de confirmación de eliminación, que no se crea por defecto con el resource
Route::get('anuncios/{anuncio}/delete', [AnuncioController::class, 'delete'])
    ->name('anuncios.delete');
    
//CRUD DE ANUNCIOS
Route::resource('/anuncios', AnuncioController::class); //automaticamente mapea las rutas y sus nombres

//rutas autenticación
Auth::routes(['verify'=>true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//ruta per defecte: ha d'estar posada la última!!!
Route::fallback([WelcomeController::class, 'index']);



