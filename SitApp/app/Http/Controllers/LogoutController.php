<?php

namespace App\Http\Controllers;
/*Librerias utilizadas para el correcto funcionamiento del controlador*/
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class LogoutController extends Controller
{
    /*Función para hacer flush a la cuenta y deshechar
    las credenciales y cerrar sesión*/
    public function logout(){
        Session::flush();

        Auth::logout();

        return redirect()->to('/login');
    }
}
