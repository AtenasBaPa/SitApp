@extends('layout3')
@section('content')
<div class="w-3/4 h-screen mx-auto">
    <!-- Clase para el logo  -->
    <div class="w-72 h-52 mx-auto" style="background-image:url(img/Logos/1.svg);background-size: 70%;  background-position:center;background-repeat:no-repeat;"></div>

    <div class="grid grid-cols-4 grid-rows-6 mx-auto login-screen">
        <div class="col-start-1 col-span-4 text-4xl py-8 row-start-1 app-title"> <!-- Clase para  el titulo que esta adentro del cuadro -->
            <h1>Registro de Usuario</h1>
        </div>
<!-- Inicia formulario para registro -->
        <form class="col-start-1 col-span-4 row-start-2 row-span-3 w-full" action="/register" method="POST">
    @csrf
    <div class="grid grid-cols-4 grid-rows-6 login-form">
        <div class="control-group col-start-1 col-span-4 row-start-1">
<<<<<<< Updated upstream
            <input type="email" class="input-password pl-6 text-lg font-semibold @error('correo') border-red-500 @enderror" required autocomplete="disable" placeholder="Ingresa su correo" id="correo" name="correo">
=======
            <input type="email" class="input-password pl-6 text-lg font-semibold @error('correo') border-red-500 @enderror" required autocomplete="disable" placeholder="Ingrese su correo" id="correo" name="correo">
>>>>>>> Stashed changes
            <label for="emailInput" class="login-field-icon fui-user"></label>
            @error('correo')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="control-group col-start-1 col-span-4 row-start-2">
<<<<<<< Updated upstream
            <input type="text" class="input-password pl-6 text-lg font-semibold @error('nombre') border-red-500 @enderror" placeholder="Ingresa su nombre" id="nombre" name="nombre">
=======
            <input type="text" class="input-password pl-6 text-lg font-semibold @error('nombre') border-red-500 @enderror" placeholder="Ingrese su nombre" id="nombre" name="nombre">
>>>>>>> Stashed changes
            @error('nombre')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="control-group col-start-1 col-span-4 row-start-3">
<<<<<<< Updated upstream
            <input type="password" class="input-password pl-6 text-lg font-semibold @error('password') border-red-500 @enderror" placeholder="Ingresa una contraseña" id="password" name="password">
=======
            <input type="password" class="input-password pl-6 text-lg font-semibold @error('password') border-red-500 @enderror" placeholder="Ingrese una contraseña" id="password" name="password">
>>>>>>> Stashed changes
            @error('password')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="control-group col-start-1 col-span-4 row-start-4">
<<<<<<< Updated upstream
            <input type="password" class="input-password pl-6 text-lg font-semibold @error('password_confirmation') border-red-500 @enderror" placeholder="Ingresa de nuevo la contraseña" id="password_confirmation" name="password_confirmation">
=======
            <input type="password" class="input-password pl-6 text-lg font-semibold @error('password_confirmation') border-red-500 @enderror" placeholder="Ingrese de nuevo la contraseña" id="password_confirmation" name="password_confirmation">
>>>>>>> Stashed changes
            @error('password_confirmation')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="control-group col-start-1 col-span-4 row-start-5">
<<<<<<< Updated upstream
            <input type="text" class="input-password pl-6 text-lg font-semibold @error('licencia') border-red-500 @enderror" placeholder="Ingresa su Numero de licencia" id="licencia" name="licencia">
=======
            <input type="text" class="input-password pl-6 text-lg font-semibold @error('licencia') border-red-500 @enderror" placeholder="Ingrese su número de licencia" id="licencia" name="licencia">
>>>>>>> Stashed changes
            @error('licencia')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="control-group col-start-1 col-span-4 row-start-6">
<<<<<<< Updated upstream
            <input type="text" class="input-password pl-6 text-lg font-semibold @error('tarjeta') border-red-500 @enderror" placeholder="Ingresa su tarjeta" id="tarjeta" name="tarjeta">
            @error('tarjeta')
=======
            <input type="text" class="input-password pl-6 text-lg font-semibold @error('curp') border-red-500 @enderror" placeholder="Ingrese su CURP" id="curp" name="curp">
            @error('curp')
>>>>>>> Stashed changes
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="control-group col-start-1 col-span-4 row-start-7">
            <input type="text" class="input-password pl-6 text-lg font-semibold @error('curp') border-red-500 @enderror" placeholder="Ingrese su CURP" id="curp" name="curp">
            @error('curp')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
<!-- Boton para poder registrar una nueva cuenta -->
        <button type="submit" class="col-start-1 col-span-4 mx-28 btn btn-large btn-block py-2 bg-[#7EACE9]" value="Registarse">
            Crear Cuenta
        </button>
<!-- Boton para volver a pagina principal -->
        <a class="col-start-1 col-span-4 w-fit h-fit py-4 m-auto login-return transition-colors duration-500 hover:text-[#1E56A0]" href="/login">
            Volver
        </a>
    </div>
</form>
<!-- Termina formulario para registro -->
    </div>
</div>
    @endsection
