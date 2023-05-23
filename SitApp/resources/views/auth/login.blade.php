@extends('layout2')
@section('content')
<div class="w-3/4 h-screen mx-auto">
    <!-- Clase para el logo  -->
    <div class="w-72 h-60 mx-auto" style="background-image:url(img/Logos/1.svg);background-size: 70%;  background-position:center;background-repeat:no-repeat;"></div>

    <div class="grid grid-cols-4 grid-rows-4 mx-auto login-screen"> <!-- Clase para  la pantalla adentro de login-->
        <div class="col-start-1 col-span-4 text-4xl py-8 row-start-1 app-title"> <!-- Clase para  el titulo que esta adentro del cuadro -->
            <h1>Bienvenido</h1>
        </div>
        <!-- Inicia formulario para inicio de sesión -->
        <form class="col-start-1 col-span-4 row-start-2 row-span-3 w-full" method="POST" action="/login">
    @csrf
    <div class="grid grid-cols-4 grid-rows-5 login-form">
        <div class="control-group col-start-1 col-span-4 row-start-1">
            <input type="text" class="input-password pl-6 text-lg font-semibold @error('correo') border-red-500 @enderror"  placeholder="Correo" id="correo" name="correo">
            @error('correo')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="control-group col-start-1 col-span-4 row-start-2">
            <input type="password" class="input-password pl-6 text-lg font-semibold @error('password') border-red-500 @enderror"  placeholder="Contraseña" id="password" name="password">
            @error('password')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
<!-- Boton para inicio de sesión -->
        <button class="col-start-1 col-span-4 row-start-3 mx-28 btn btn-large btn-block py-2 bg-[#7EACE9]" type="submit" value="Login">
            Iniciar Sesión
        </button>
<!-- Boton para poder registrar una nueva cuenta -->
        <a class="col-start-1 col-span-4 row-start-4 login-link text-center mx-auto" href="/register">
            <span>¿No tienes una cuenta?</span> <span class="transition-colors duration-500 hover:text-[#1E56A0]"> Regístrate</span>
        </a>
<!-- Boton para volver a pagina principal -->
        <a class="col-start-1 col-span-4 row-start-5 w-fit m-auto login-return transition-colors duration-500 hover:text-[#1E56A0]" href="/">
            Volver
        </a>
    </div>
</form>
<!-- termina formulario para inicio de sesión -->
    </div>

</div>




@endsection
