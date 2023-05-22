<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Request\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function show(){

        if(Auth::check()){
            return redirect('/');

        }
        return view('auth.register');


    }

    public function register(RegisterRequest $request){
        $user = User::create($request->validated());
        return redirect('/login')->with('success', 'Account created successfully');
    }








}
