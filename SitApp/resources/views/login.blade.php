<!DOCTYPE html>
<html lang="es"> <!-- Letra Español -->
<head>
    <meta charset="UTF-8">  <!-- tipo de codificacion de caracteres -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Inria Sans' rel='stylesheet'> <!-- font para el tipo de letra -->
    <title>Inicio de Sesion</title> <!-- Titulo de la Pagina -->
    @vite('resources/css/estiloLogin.css')
</head>
<body>
    <div class="logo"> <!-- Clase para el logo  -->
    <div class="w-72 h-32" style="background-image:url(img/Logos/1.png);background-size: 40%;  background-position:right;background-repeat:no-repeat;"></div>
      </div>
	<div class="login"> <!-- Clase para Login -->
		<div class="login-screen"> <!-- Clase para  la pantalla adentro de login-->
			<div class="app-title"> <!-- Clase para  el titulo que esta adentro del cuadro -->
				<h1>Bienvenido</h1>
			</div>
    <form method="POST" action="{{route('iniciar-sesion')}}">
    @csrf
			<div class="login-form"> <!-- Clase para el tipo de entradas -->
				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="Usuario" id="login-name"> <!--  input para ingresar Usuario  -->
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="Contraseña" id="login-pass"> <!-- input para colocar password -->
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>

				<button class="btn btn-primary btn-large btn-block" type="submit">Iniciar Sesión</button> <!-- boton para inicar Sesion -->
				<a class="login-link" href="{{route('registro')}}">¿No tienes una cuenta? Regístrate</a> <!-- href para hacer referncia a la pagina de registro -->
			</div>
                 <a class="login-return" href="">Volver</a> <!-- href para volver a la pagina principal-->
    </form>			 
		</div>
	</div>
</body>
</html>