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

<body class="pb-80 pt-32 relative min-h-screen bg-[#F6F6F6]">
    @yield('content')
    <!--NAVBAR DE LA PAGINA-->
    <div class="container">
            <nav class="navbar">
                <div class="navbar-container">
                    <a href="/"><div class="w-64 h-12" style="background-image:url(/img/Logos/8.svg);background-size: 100%; background-position:center;background-repeat: no-repeat;"></div></a>
                    <div class="navbar-links">
                        <a href="/noticias" class="relative group text-white">
                            NOTICIAS
                            <span class="absolute left-0 bottom-0 w-0 border-b-2 bg-[#FFFFFF] transition-width duration-500 group-hover:w-20"></span>
                        </a>
                        <div class="w-0 h-6 border-r-2 mr-4"></div>
                        <a href="/menu_tramites" class="relative group text-white">
                            TRÁMITES
                            <span class="absolute left-0 bottom-0 w-0 border-b-2 bg-[#FFFFFF] transition-width duration-500 group-hover:w-20"></span>
                        </a>
                        <div class="w-0 h-6 border-r-2 mr-4"></div>
                        <a href="/mision_vision" class="relative group text-white">
                            NOSOTROS
                            <span class="absolute left-0 bottom-0 w-0 border-b-2 bg-[#FFFFFF] transition-width duration-500 group-hover:w-24"></span>
                        </a>
                        <div class="w-0 h-6 border-r-2 mr-4"></div>

                        @auth
                            <div class="relative">
                                <button class="flex items-center justify-center w-full px-4 py-2 text-lg font-medium text-white bg-[#437ECB] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="menu-button" aria-expanded="false" aria-haspopup="true">
                                    {{ auth()->user()->nombre }}
                                    <!-- Icono de flecha hacia abajo -->
                                    <svg class="w-4 h-4 ml-2 -mr-1 transition duration-150 ease-in-out" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 14l6-6H4z" />
                                    </svg>
                                </button>

                                <!-- Opciones del menú -->
                                <div class="absolute right-0 rounded-xl w-40 mt-2 origin-top-right rounded-md hidden shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" id="menu-items">
                                    <div class="block px-4 py-2 h-full rounded-xl w-full text-xl text-black hover:bg-gray-100 hover:text-gray-900">
                                        <span style="display: flex; align-items: left;">
                                            <a href="/cuenta" class="text-black" role="menuitem">Cuenta</a>
                                            <span class="w-full" style="display: inline-block; width: 25px; height: 25px; background-image: url(/img/usuario.png); background-size: 100%; background-position: right; background-repeat: no-repeat;"></span>
                                        </span>
                                    </div>

                                    <div class="block px-4 py-2 h-full rounded-xl w-full text-xl text-black hover:bg-gray-100 hover:text-gray-900">
                                        <span style="display: flex; align-items: left;">
                                            <a href="/logout" class="text-black" role="menuitem">Log-Out</a>
                                            <span style="display: inline-block; width: 20px; height: 20px; background-image: url(/img/cerrar-sesion.png); background-size: 100%; background-position: right; background-repeat: no-repeat;"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endauth

                        @guest
                        <a href="/login" class="relative group text-white login-btn">
                            INICIAR SESIÓN
                            <span class="absolute left-0 bottom-0 w-0 border-b-2 bg-[#FFFFFF] transition-width duration-500 group-hover:w-32"></span>
                        </a>
                        @endguest
                    </div>
                </div>
            </nav>
        </div>


    <footer class="font-jose absolute bottom-0 w-screen bg-[#2B3467] h-72 grid grid-cols-4 grid-rows-6 gap-1 text-white">
        <a href="/" class="col-start-1 col-end-2 w-auto"><div class="w-100 h-28 pr-40 -mt-4 ml-8" style="background-image:url(/img/logos/11.png); background-size: 45%; background-position:left;background-repeat: no-repeat;"></div></a>
<<<<<<< Updated upstream
        <a href="/terminosycondiciones" class="col-start-1 col-end-2 row-start-2  pl-8 py-4 ">Términos y condiciones</a>
=======
        <a href="/terminosycondiciones" class="col-start-1 col-end-2 row-start-2  pl-8 py-4 "><u>Términos y condiciones</u></a>
>>>>>>> Stashed changes
        <div class="col-start-1 col-end-2 row-start-3  pl-8 pt-2">Dirección: San Claudio y 14 Sur</div>
        <div class="col-start-1 col-end-2 row-start-4  pl-8">Teléfono: 222 222 2222</div>
        <div class="col-start-1 col-end-2 row-start-5  pl-8">Correo Electrónico: sitapp@puebla.com</div>
        <div class="col-start-1 col-end-2 row-start-6  pl-8">Oficinas Centrales: 18 Sur y Circunvalación</div>
    </footer>
</body>

</html>


<script>
    // Obtener referencias a los elementos del menú
    const menuButton = document.getElementById('menu-button');
    const menuItems = document.getElementById('menu-items');

    // Agregar evento clic al botón del menú
    menuButton.addEventListener('click', () => {
        const expanded = menuButton.getAttribute('aria-expanded') === 'true';
        menuButton.setAttribute('aria-expanded', !expanded);
        menuItems.classList.toggle('hidden');
    });
</script>
