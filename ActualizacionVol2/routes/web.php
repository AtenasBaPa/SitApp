<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::view('/login', "login")->name('login');
Route::view('/registro', "register")->name('registro');
Route::view('/bienvenido', "welcome")->name('welcome');


Route::post('/validar-registro', [LoginController::class,'register'])->
            name('validar-registro');

Route::post('/iniciar-sesion', [LoginController::class,'login'])->
            name('iniciar-sesion');
