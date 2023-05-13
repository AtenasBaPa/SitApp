<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>SitApp</title>
    @vite('resources/css/app.css')
    @vite('resources/css/navbar.css')
</head>

<body class="pb-80 pt-36 relative min-h-screen">
    @yield('content')
    <!--NAVBAR DE LA PAGINA-->
    <div class="container">
            <nav class="navbar">
                <div class="navbar-container">
                    <div class="w-64 h-52 titulo" style="background-image:url(/img/Logos/8.svg);background-size: 100%; background-position:center;background-repeat: no-repeat;"></div>
                    <!--<div class="logo">
                    <a href="#"><img src="/img/Logos/8.svg"><div class="titulo"></div></a>
                    </div>-->
                    <div class="navbar-links">
                    <a href="#">NOSOTROS</a>
                    <a href="#" class="login-btn">INICIAR SESIÓN</a>
                    </div>
                </div>
            </nav>
        </div>


    <footer class="font-jose absolute bottom-0 w-screen bg-[#2B3467] h-72 grid grid-cols-4 grid-rows-6 gap-1 text-white">
        <div class="col-start-1 col-end-2 row-start-1  pl-8 pt-6 ">SITAPP</div>
        <div class="col-start-1 col-end-2 row-start-2  pl-8 py-4 ">Atencion Ciudadana</div>
        <div class="col-start-1 col-end-2 row-start-3  pl-8 pt-2">Direccion: San Claudio y 14 Sur</div>
        <div class="col-start-1 col-end-2 row-start-4  pl-8">Telefono: 222 222 2222</div>
        <div class="col-start-1 col-end-2 row-start-5  pl-8">Correo Electronico: sitapp@puebla.com</div>
        <div class="col-start-1 col-end-2 row-start-6  pl-8">Oficinas Centrales: 18 Sur y Circunvalacion</div>
<<<<<<< Updated upstream

        <div class="col-start-4 col-end-5">
            <section class="grid-cols-3 grid-rows-2 grid flex-row">
                <div class="col-start-1 col-end-3 row-start-1 w-100 h-28 pr-40" style="background-image:url(/img/puebla.png);background-size: 80%; background-position:center;background-repeat: no-repeat;"></div>
                <div class="col-start-1 row-start-2 flex-initial w-20 h-20 ml-10" style="background-image:url(/img/twitter.png);background-size: 50%; background-position:center;background-repeat: no-repeat;"></div>
                <div class="col-start-2 row-start-2 flex-initial w-20 h-20 -ml-10" style="background-image:url(/img/facebook.png);background-size: 50%; background-position:center;background-repeat: no-repeat;"></div>
                <div class="col-start-3 row-start-2 flex-initial w-20 h-20 -ml-28" style="background-image:url(/img/instagram.png);background-size: 70%; background-position:center;background-repeat: no-repeat;"></div>
</section>

        </div>

=======
>>>>>>> Stashed changes
    </footer>
</body>

</html>
