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
    <br> <p class="text-lg pt-6">- Eduardo, Conductor de Puebla.</p> </p>
</div>

<div class="w-full h-full mt-20 text-center bg-[#F0F0F0] text-justify ">
    <div class="w-3/4 m-auto pb-8">
        <h2 class="text-left py-8 pt-10 text-3xl font-bold text-[#1E56A0]">Acerca de nosotros</h2>

        <p class="text-2xl py-4">
            En primavera de 2023, por un proyecto de la universidad con el objetivo de reducir
            los accidentes viales, surgió la idea por un grupo de estudiantes de la licenciatura
            de Gestión de Ciudades Inteligentes y Transiciones Tecnológicas, con el apoyo de
            estudiantes de la facultad de Ciencias de la Computación, tratando de apoyar a cientos
            de conductores de la ciudad de Puebla, es así como nació está aplicación web:
        </p>

        <p class="text-2xl py-4">
            SIT app es una aplicación web que se puede utilizar desde el teléfono, computadora,
            tablet, y otros dispositivos que tengan un navegador web, se creó para los conductores
            de la ciudad de Puebla, con la finalidad de motivar al conductor a realizar mejor su
            conducción y recibir recompensas por eso.
        </p>

        <p class="text-2xl py-4">
            Además de que proporcionamos algunos documentos como la licencia, tarjeta de
            circulación y multas digitales para facilitar su uso, mantener informado de manera
            instantánea y facilitar pagos.
        </p>
    </div>
</div>

<div class="h-20"></div>

<div class=" w-3/5 py-10 m-auto">
    <h2 class="text-center text-4xl font-bold pb-8 text-[#1E56A0]">Recompensas SITTAPP</h2>

    <div class="">
        <div class="text-lg">
            <h3 class="text-2xl py-6 text-[#1E56A0]">¿Que son las recompensas SittApp?</h3>
            <p>
                Las recompensas en SIT App son incentivos o estímulos que se conceden
                a los usuarios registrados en el sistema para motivarlos a practicar
                una buena conducción. Estos incentivos serán otorgados en un periodo
                de tiempo de 30 días, y con ellos podrán obtener diversos beneficios
                tanto personales como para su unidad de transporte.
            </p>
            <h4 class="pt-6 pb-4 text-2xl text-[#1E56A0]">¿Como consigo estas recompensas?</h4>
            <p class="pt-2 pb-6">
                Las recompensas se pueden obtener de varias maneras, las cuales podrá
                ver a continuación:
            </p>
            <div>
                <ul class="list-image-[url(img/verificado1.png)] list-outside pb-10 ml-8">
                    <li>Pagar cada año a tiempo su tenencia.</li>
                    <li>Hacer la verificación de su vehiculo cada año.</li>
                    <li>Haber pagado con sus multas a tiempo o antes de tiempo.</li>
                    <li>Haber pagado todas sus foto-multas</li>
                    <li>No haber tenido alguna falta vial durante cada mes.</li>
                    <li>Visitar la pagina para obtener puntos cada dia.</li>
                </ul>

                <p class="text-4xl font-bold text-center py-10 text-[#1E56A0]">Recompensas</p>
            </div>
        </div>

        <div class="grid grid-cols-2 grid-rows-2 gap-9 justify-items-center pb-10">
            <div class="col-start-1 row-start-1 h-52 w-96 rounded-3xl bg-[#F6F6F6] drop-shadow-xl">
                <div class="w-full pl-8 m-8 text-5xl text-[#1E56A0]">25% off</div>
                <div class="w-10/12 m-6 text-xl font-semibold"><p>En la renovación de la licencia de conducir (600 puntos).</p></div>
            </div>

            <div class="col-start-2 row-start-1 h-52 w-96 rounded-3xl bg-[#F6F6F6] drop-shadow-xl">
                <div class="w-full pl-8 m-8 text-5xl text-[#1E56A0]">50% off</div>
                <div class="w-10/12 m-6 text-xl font-semibold"><p>En estacionamiento centro comercial Angelópolis <br> (150 puntos).</p></div>
            </div>

            <div class="col-start-1 row-start-2 h-52 w-96 rounded-3xl bg-[#F6F6F6] drop-shadow-xl">
                <div class="w-full pl-8 m-8 text-5xl text-[#1E56A0]">30% off</div>
                <div class="w-10/12 m-6 text-xl font-semibold"><p>En cualquier caseta del país <br> (450 puntos).</p></div>
            </div>

            <div class="col-start-2 row-start-2 h-52 w-96 rounded-3xl bg-[#F6F6F6] drop-shadow-xl">
                <div class="w-full pl-8 m-8 text-5xl text-[#1E56A0]">40% off</div>
                <div class="w-10/12 m-6 text-xl font-semibold"><p>En próximo viaje de Uber <br> (200 puntos).</p></div>
            </div>

            <div class="col-start-1 row-start-3 h-52 w-96 rounded-3xl bg-[#F6F6F6] drop-shadow-xl">
                <div class="w-full pl-8 m-8 text-5xl text-[#1E56A0]">2 x 1</div>
                <div class="w-10/12 m-6 text-xl font-semibold"><p>Boletos Cinépolis (250 puntos). </p></div>
            </div>

            <div class="col-start-2 row-start-3 h-52 w-96 rounded-3xl bg-[#F6F6F6] drop-shadow-xl">
                <div class="w-full pl-8 m-8 text-5xl text-[#1E56A0]">20% off</div>
                <div class="w-10/12 m-6 text-lg font-semibold"><p>En servicios de mantenimiento de vehículos “cambio de aceite o ajuste	 de frenos” (1000 puntos).</p></div>
            </div>
        </div>

    </div>
</div>

@endsection

