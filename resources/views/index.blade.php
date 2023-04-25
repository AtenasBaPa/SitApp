@extends('layout')
@section('content')
<!--CARRUSEL-->
<div class="max-w-screen-2xl mx-auto">

	<div id="default-carousel" class="relative" data-carousel="static">

        <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl ">Primer Slide</span>
                <img src="/img/transito (2).jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="primera">
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/img/transito (2).jpeg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="segunda">
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/img/transito (1).jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="tercera">
            </div>

        </div>


        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>

        <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="hidden">Anterior</span>
            </span>
        </button>
        <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 0 group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="hidden">Siguiente</span>
            </span>
        </button>
    </div>

</div>

<!--CONTENIDO DE INFORMACIÓN-->
<div class="w-full h-56 mt-32 text-center">
    <p class="font-bold text-xl">“SitApp es una herramienta muy útil para los conductores de Puebla. <br>
    He estado usándolo durante los últimos 6 meses y es de gran <br> ayuda para gestionarme como conductor.”
    <br> <p class="text-lg">- Eduardo, Conductor de Puebla.</p> </p>
</div>

<div class="w-full h-96 mt-20 text-center bg-[#F0F0F0]">
    <p class="text-left my-10 pt-10 text-2xl font-bold pl-52">Acerca de nosotros</p>
    <p class="text-center text-2xl px-64">Esto es SitApp, un sistema de gestión para conductores en la ciudad de Puebla. Estamos aquí para ayudar a los conductores <br>
    a ahorrar tiempo e incluso dinero al gestionar sus actividades diarias al conducir. Con nuestro sistema, los conductores <br>
    pueden controlar fácilmente su informacion, multas, tenencias, verificación vehicular y muchas cosas mas. También nos <br>
    enorgullece ofrecer una solución de seguridad vial para los conductores y sus vehículos. Ayudamos a los conductores a <br>
    prevenir problemas inesperados al proporcionarles un seguro de viaje adecuado. Así mismo, nuestro sistema también les <br>
    proporciona datos de tráfico y estacionamiento en tiempo real para que puedan tomar decisiones informadas. ¡Estamos muy <br>
    emocionados por la oportunidad.</p>

</div>
@endsection
