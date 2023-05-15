<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/vistabernal', function(){
    return view('vistabernal');
})->name('vistabernal');

Route::get('/infracciones', function(){
    return view('infracciones');
})->name('infracciones');

Route::get('/recompensas', function(){
    return view('recompensas');
})->name('recompensas');

Route::get('/menu_usuario', function(){
    return view('menu_usuario');
})->name('menu_usuario');

Route::get('/licencia', function(){
    return view('licencia');
})->name('licencia');

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
