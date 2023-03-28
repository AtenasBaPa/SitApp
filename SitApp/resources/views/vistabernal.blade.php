<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/sources/navbar.css">
    <link rel="stylesheet" href="/sources/footser.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @vite(['resources/css/app.css'])
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <nav class="navbar">
      <div class="navbar-container">
        <div class="logo">
        <a href="#"><img src="/sources/img/Logos/8.svg"><div class="titulo"></div></a>
        </div>
        <div class="navbar-links">
          <a href="#">NOSOTROS</a>
          <a href="#" class="login-btn">INICIAR SESIÓN</a>
        </div>
      </div>
    </nav>
    </div>

    <div class="main">
      <br>
      <br><br><br><br>
    <table class="table-auto mx-auto">
  <thead>
  </thead>
  <tbody>
    <tr>
      <td class="px-12 py-12 text-center bg-blue-300 border-8 border-white rounded-3xl hover:bg-blue-100 transition-all duration-200"><img class="w-20" src="/sources/img/advertencia.png" /> Advertencia</td>
      <td class="px-12 py-12 text-center bg-blue-300 border-8 border-white rounded-3xl hover:bg-blue-100 transition-all duration-200"><img class="w-20" src="/sources/img/recompensa.png" /> Recompensas</td>
      <td class="px-12 py-12 text-center bg-blue-300 border-8 border-white rounded-3xl hover:bg-blue-100 transition-all duration-200"><img class="w-20" src="/sources/img/fotomulta.png" /> Foto multas</td>
      <td class="px-12 py-12 text-center bg-blue-300 border-8 border-white rounded-3xl hover:bg-blue-100 transition-all duration-200"><img class="w-20" src="/sources/img/documento.png" /> Documentos</td>
    </tr>   
    <tr>
      <td class="px-12 py-12 text-center bg-blue-300 border-8 border-white rounded-3xl hover:bg-blue-100 transition-all duration-200"><img class="w-20" src="/sources/img/asistencia.png" /> Asistencia</td>
      <td class="px-12 py-12 text-center bg-blue-300 border-8 border-white rounded-3xl hover:bg-blue-100 transition-all duration-200"><img class="w-20" src="/sources/img/licencia.png" /> Licencia</td>
      <td class="px-12 py-12 text-center bg-blue-300 border-8 border-white rounded-3xl hover:bg-blue-100 transition-all duration-200"><img class="w-20" src="/sources/img/verificacion.png" /> Verificacion</td>
      <td class="px-12 py-12 text-center bg-blue-300 border-8 border-white rounded-3xl hover:bg-blue-100 transition-all duration-200"><img class="w-20" src="/sources/img/tenencia.png" /> Tenencia</td>
    </tr>
  </tbody>
</table>
<table class="table-auto mx-auto">
  <thead>
  </thead>
  <tbody>
    <tr>
      <td class="px-12 py-12 text-center"></td>
      <td class="px-12 py-12 text-center"></td>
      <td class="px-12 py-12 text-center bg-blue-300 border-8 border-white rounded-3xl hover:bg-blue-100 transition-all duration-200"><img class="w-20" src="/sources/img/eliminar.png" />Eliminar <br> Cuenta</td>
      <td class="px-12 py-12 text-center"></td>
      <td class="px-12 py-12 text-center"></td>
    </tr>   
  </tbody>
</table>
<br>
    </div>
    <!-- 

  <footer>
  <table width="100%" text-align="center" cellpadding= "2">
			<tbody>
			<tr>
				<td rowspan="2" colspan="1">
            <div class="text"><br><br>
            SITAPP <br><br><br>
            Atencion Ciudadana
            <br><br><br>
            Direccion: San Claudio y 14 Sur
            <br><br>
            Telefono: 222 222 2222
            <br> <br>
            Correo Electronico: sitapp@puebla.com
            <br><br>
            Oficinas Centrales: 18 Sur y Circunvalacion
            </div>
        </td>
				<td colspan="2">
        <div class="logopuebla">
        <img src="/sources/img/puebla.png" alt="Logotipo">
        </div>
        </td>

			</tr>
			<tr>
				<td colspan="2">
          <div class="social-links">
            <a href="#" class="social-link"><img src="sources/img/twitter.png" alt="" srcset=""></a>
            <a href="#" class="social-linkf"><img src="sources/img/facebook.png" alt="" srcset=""></a>
            <a href="#" class="social-linki"><img src="sources/img/instagram.png" alt="" srcset=""></a>
          </div>
        </td>
			</tr>

		</tbody></table>
  </footer>

Este es un comentario en HTML -->
<footer class="bg-blue-900 text-white py-4">
  <div class="container mx-auto">
  <table width="100%" cellpadding= "2">
			<tbody>
			<tr>
				<td rowspan="2" colspan="1">
            <div class="text"><br><br>
            SITAPP <br><br><br>
            Atencion Ciudadana
            <br><br><br>
            Direccion: San Claudio y 14 Sur
            <br><br>
            Telefono: 222 222 2222
            <br> <br>
            Correo Electronico: sitapp@puebla.com
            <br><br>
            Oficinas Centrales: 18 Sur y Circunvalacion
            </div>
        </td>
				<td colspan="2">
        <div class="logopuebla">
        <img src="/sources/img/puebla.png" alt="Logotipo">
        </div>
        </td>

			</tr>
			<tr>
				<td colspan="2">
          <div class="w-50 flex items-center">
            <a href="#" class="w-10"><img src="sources/img/twitter.png" alt="" srcset=""></a>
            <a href="#" class="w-10"><img src="sources/img/facebook.png" alt="" srcset=""></a>
            <a href="#" class="w-12"><img src="sources/img/instagram.png" alt="" srcset=""></a>
          </div>
        </td>
			</tr>

		</tbody></table>
  </div>
</footer>

</body>
</html>