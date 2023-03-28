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

Route::get('/nueva', function(){
    return view('nueva');
})->name('nueva');
