<!DOCTYPE html>
<html lang="es"> <!-- Letra Español -->
<head>
    <meta charset="UTF-8">  <!-- tipo de codificacion de caracteres -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Inria Sans' rel='stylesheet'> <!-- font para el tipo de letra -->
    <title>Registro de Usuario</title> <!-- Titulo de la Pagina -->
    @vite('resources/css/estiloRegistro.css')
</head>
<body>
    
    <div class="logo"> <!-- Clase para el logo  -->
    <div class="w-72 h-32" style="background-image:url(img/Logos/1.svg);background-size: 40%;  background-position:right;background-repeat:no-repeat;"></div>
      </div>
	<div class="login"> <!-- Clase para Login -->
		<div class="login-screen"> <!-- Clase para  la pantalla adentro de Registro-->
			<div class="app-title"> <!-- Clase para  el titulo que esta adentro del cuadro -->
				<h1>Registro de Usuario</h1>
			</div>
  <form method="POST" action="{{route('validar-registro')}}">
            @csrf
			<div class="login-form"> <!-- Clase para el tipo de entradas -->
				<div class="control-group">
                    <input type="text" class="login-field" requerid autocompete='disable' placeholder="Ingresa Nombre de Usuario" id="login-name" name="name"> <!--  input para ingresar Usuario  -->
                    <label  for="login-name" class="login-field-icon fui-user"></label>
				</div>

				<div class="control-group">
                    <input type="password" requiered class="login-field"  placeholder="Ingresa una Contraseña" id="login-pass"> <!--  input para Ingresar una Contraseña  -->
                    <label class="login-field-icon fui-lock" for="passwordInput"></label>
                    </div>

                <div class="control-group">
                    <input type="text" class="login-field"  placeholder="Ingresa su Numero de Licencia " id="login-name"> <!--  input para Ingresar su Numero de Licencia  -->
                    <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>

                    <div class="control-group">
                        <input type="text" class="login-field" placeholder="Ingresa su Curp " id="login-name"> <!--  input para Ingresar su Curp  -->
                        <label class="login-field-icon fui-user" for="login-name"></label>
                        </div>
   
                        <button type="submit" class="btn btn-primary btn-large btn-block">Crear Cuenta</button> <!-- boton para Crear Cuenta-->
    </form>
			</div>
                 <a class="login-return" href="#">volver</a> <!-- href para volver a la pagina principal-->
		</div>
	</div>
</body>
</html>