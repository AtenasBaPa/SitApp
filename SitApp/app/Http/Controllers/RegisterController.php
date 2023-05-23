<?php

namespace App\Http\Controllers;
/*Librerias utilizadas para el correcto funcionamiento del controlador*/
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Request\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    /*Muestra la pagina de registro si no está logeado si la pagina de login ya fue iniciada*/
    public function show(){

        if(Auth::check()){
            return redirect('/');

        }
        return view('auth.register');


    }
/*Obtiene los datos del forms y hace el registro en la base de datos
en la tabla users*/
    public function register(RegisterRequest $request){
        $user = User::create($request->validated());
        return redirect('/login')->with('success', 'Account created successfully');
    }








}
