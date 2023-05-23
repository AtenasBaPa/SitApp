<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LicenciaDigitalController;
use App\Http\Controllers\LogoutController;
use App\Models\Post;

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

Route::get('/', function(){
    return view('index');
})->name('home');

Route::get('/login' ,function () {
    return view('auth.login');
});
Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/register' ,function () {
    return view('auth.register');
});

Route::get('/cuenta', function(){
    return view('cuenta');
})->name('cuenta');

Route::post('/register', [RegisterController::class, 'register']);
Route::get('/infracciones', function(){
    return view('infracciones');
})->name('infracciones');

Route::get('/docs', function(){
    return view('docs');
})->name('docs');

Route::get('/recompensas', function(){
    return view('recompensas');
})->name('recompensas');


Route::get('/menu_usuario', function(){
    return view('menu_usuario');
})->name('menu_usuario');

Route::get('/licenciaDigital', function(){
    return view('licenciaDigital');
})->name('licenciaDigital');

Route::get('licenciaDigital', [LicenciaDigitalController:: class, 'licencia']);
Route::post('imagenLicencia', [LicenciaDigitalController::class, 'imagenLicencia']);

Route::get('/menu_tramites', function(){
    return view('menu_tramites');
})->name('menu_tramites');

Route::get('/chat/frontend/source/assets/AuthPage.jsx', function(){
    return view('AuthPage');
})->name('AuthPage');

Route::get('/foto_infraccion', function(){
    return view('foto_infraccion');
})->name('foto_infraccion');

Route::get('/noticias', function(){
    return view('noticias');
})->name('noticias');

Route::get('/noticia1', function(){
    return view('noticia1');
})->name('noticia1');

Route::get('/noticia2', function(){
    return view('noticia2');
})->name('noticia2');

Route::get('/noticia3', function(){
    return view('noticia3');
})->name('noticia3');

Route::get('/noticia4', function(){
    return view('noticia4');
})->name('noticia4');

Route::get('/noticia5', function(){
    return view('noticia5');
})->name('noticia5');

Route::get('/terminosycondiciones', function(){
    return view('terminosycondiciones');
})->name('terminosycondiciones');

Route::get('/mision_vision', function(){
    return view('mision_vision');
})->name('mision_vision');

?>
