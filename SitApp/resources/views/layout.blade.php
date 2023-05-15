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

<body class="pb-80 pt-32 relative min-h-screen">
    @yield('content')
    <!--NAVBAR DE LA PAGINA-->
    <div class="container">
            <nav class="navbar">
                <div class="navbar-container">
                    <a href="/"><div class="w-64 h-12 titulo" style="background-image:url(/img/Logos/8.svg);background-size: 80%; background-position:center;background-repeat: no-repeat;"></div></a>
                    <div class="navbar-links">
                        <a href="/noticias" class="relative group">
                            NOTICIAS
                            <span class="absolute left-0 bottom-0 w-0 border-b-2 bg-[#FFFFFF] transition-width duration-500 group-hover:w-20"></span>
                        </a>
                        <div class="w-0 h-6 border-r-2 mr-4"></div>
                        <a href="/menu_tramites" class="relative group">
                            TRAMITES
                            <span class="absolute left-0 bottom-0 w-0 border-b-2 bg-[#FFFFFF] transition-width duration-500 group-hover:w-20"></span>
                        </a>
                        <div class="w-0 h-6 border-r-2 mr-4"></div>
                        <a href="/mision_vision" class="relative group">
                            NOSOTROS
                            <span class="absolute left-0 bottom-0 w-0 border-b-2 bg-[#FFFFFF] transition-width duration-500 group-hover:w-24"></span>
                        </a>
                        <div class="w-0 h-6 border-r-2 mr-4"></div>
                        <a href="/inicio_sesion" class="relative group login-btn">
                            INICIAR SESIÓN
                            <span class="absolute left-0 bottom-0 w-0 border-b-2 bg-[#FFFFFF] transition-width duration-500 group-hover:w-32"></span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>


    <footer class="font-jose absolute bottom-0 w-screen bg-[#2B3467] h-72 grid grid-cols-4 grid-rows-6 gap-1 text-white">
        <a href="/" class="col-start-1 col-end-2 w-auto"><div class="w-100 h-28 pr-40 -mt-4 ml-8" style="background-image:url(/img/logos/11.png); background-size: 45%; background-position:left;background-repeat: no-repeat;"></div></a>
        <div class="col-start-1 col-end-2 row-start-2  pl-8 py-4 ">Atencion Ciudadana</div>
        <div class="col-start-1 col-end-2 row-start-3  pl-8 pt-2">Direccion: San Claudio y 14 Sur</div>
        <div class="col-start-1 col-end-2 row-start-4  pl-8">Telefono: 222 222 2222</div>
        <div class="col-start-1 col-end-2 row-start-5  pl-8">Correo Electronico: sitapp@puebla.com</div>
        <div class="col-start-1 col-end-2 row-start-6  pl-8">Oficinas Centrales: 18 Sur y Circunvalacion</div>
    </footer>
</body>

</html>
