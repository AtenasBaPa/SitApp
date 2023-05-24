<?php

namespace App\Http\Controllers;

use Illuminate\http\Requests;

use App\Models\User;
use Illuminate\Support\Fecades\Hash;
use Illuminate\Support\Fecades\Auth;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        //validar los datos 

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        
        Auth::login($user);

        return redirect(route('welcome'));


    }

    public function login(Request $request)
    {

    }















}

