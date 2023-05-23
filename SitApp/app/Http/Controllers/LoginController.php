<?php
/*Librerias utilizadas para el correcto funcionamiento del controlador*/
namespace App\Http\Controllers;
use App\Http\Request\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*Función que regresa la vista de index en caso de estar logeado
    en la pagina, de otra forma se muestra la pagina de login*/
    public function show(){
        if(Auth::check()){
            return redirect('/');
        }
        return view('auth.login');
    }
/*Verifica credenciales e inicia sesión, de otro modo se recarga la pagina*/
    public function login(LoginRequest $request){
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)){
            return redirect()->to('/login')->withErrors('Login failed');

        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    public function authenticated(Request $request, $user){
            return redirect('/');
    }
}
