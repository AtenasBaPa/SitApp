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
<<<<<<< Updated upstream
    He estado usándolo durante los últimos 6 meses y es de gran <br> ayuda para gestionarme como conductor.”
    <br> <p class="text-lg">- Eduardo, Conductor de Puebla.</p> </p>
=======
    He estado usándolo durante los últimos 6 meses y es de gran <br> ayuda para mejorar como conductor.”
    <br> <p class="text-lg pt-6">- Abraham, Conductor de Puebla.</p> </p>
>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
=======
<div class="h-20"></div>

<div class=" w-3/5 py-10 m-auto">
    <h2 class="text-center text-4xl font-bold pb-8 text-[#1E56A0]">Recompensas SITTAPP</h2>

    <div class="">
        <div class="text-lg">
            <h3 class="text-2xl py-6 text-[#1E56A0]">¿Que son las recompensas SittApp?</h3>
            <p>
                Las recompensas en SITAPP son incentivos o estímulos que se conceden
                a los usuarios registrados en el sistema para motivarlos a practicar
                una buena conducción. Estos incentivos serán otorgados en un periodo
                de tiempo de 30 días, y con ellos podrán obtener diversos beneficios
                tanto personales como para su unidad de transporte.
            </p>
            <h4 class="pt-6 pb-4 text-2xl text-[#1E56A0]">¿Cómo consigo estas recompensas?</h4>
            <p class="pt-2 pb-6">
                Las recompensas se pueden obtener de varias maneras. Cada una de estas acciones genran puntos de recompensas,
                las cuales podrás ver a continuación:
            </p>
            <div class="pt-6">
                <ul class="list-image-[url(img/verificado1.png)] list-outside pb-10 ml-8">
                    <li class="text-[#1E56A0] text-2xl">Pagar a tiempo su tenencia:
                        <ul>
                            <li class="text-[#000000] text-xl p-4" style="white-space: pre;">      Deberá realizar el pago de su tenencia vehicular en tiempo y forma.</li>
                        </ul>
                    </li>

                    <li class="text-[#1E56A0] text-2xl">Realice su verificación a tiempo:
                        <ul>
                            <li class="text-[#000000] text-xl p-4" style="white-space: pre;">      Realizar la verificación de su vehículo de manera anticipada.</li>
                        </ul>
                    </li>
                    <li class="text-[#1E56A0] text-2xl">Utilizar vehículos eléctricos o híbridos:
                        <ul>
                            <li class="text-[#000000] text-xl p-4" style="white-space: pre;">      Utilizar vehículos híbridos o eléctricos, generarán puntos de recompensas anualmente al estar exentos de verificación.</li>
                        </ul>
                    </li>
                    <li class="text-[#1E56A0] text-2xl">Pagar sus multas obtenidas durante el mes:
                        <ul>
                            <li class="text-[#000000] text-xl p-4" style="white-space: pre;">      El realizar el pago de sus multas lo más pronto posible a la fecha de expedición.</li>
                        </ul>
                    </li>
                    <li class="text-[#1E56A0] text-2xl">Pagar su foto multas obtenidas durante el mes:
                        <ul>
                            <li class="text-[#000000] text-xl p-4" style="white-space: pre;">      El realizar el pago de su foto multas lo más pronto posible a la fecha de expedición.</li>
                        </ul>
                    </li>
                    <li class="text-[#1E56A0] text-2xl">Visitar la página diariamente:
                        <ul>
                            <li class="text-[#000000] text-xl p-4" style="white-space: pre;">      El visitar la página diariamente acumula puntos de manera sencilla.</li>
                        </ul>
                    </li>
                    <li class="text-[#1E56A0] text-2xl">Suscribirse a las notificaciones por correo o SMS:
                        <ul>
                            <li class="text-[#000000] text-xl p-4" style="white-space: pre;">      Suscribirse a las notificaciones, generará puntos de recompensa de manera periódica.</li>
                        </ul>
                    </li>
                    <li class="text-[#1E56A0] text-2xl">Mantener el vehículo en buen estado:
                        <ul>
                            <li class="text-[#000000] text-xl p-4" style="white-space: pre;">      Mantener su vehículo en buenas condiciones durante revisiones y no presentar anomalías.</li>
                        </ul>
                    </li>
                    <li class="text-[#1E56A0] text-2xl">Reportar incidentes de tránsito:
                        <ul>
                            <li class="text-[#000000] text-xl p-4" style="white-space: pre;">      Informar sobre incidentes de tráfico o problemas en la vía puede contribuir a generar puntos de recompensa.</li>
                        </ul>
                    </li>
                    <li class="text-[#1E56A0] text-2xl">Respetar los límites de velocidad:
                        <ul>
                            <li class="text-[#000000] text-xl p-4" style="white-space: pre;">      Cada foto multa respetada podrá darle ventaja de acumular puntos.</li>
                        </ul>
                    </li>
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
                <div class="w-10/12 m-6 text-xl font-semibold"><p>Boletos en Cinépolis (250 puntos). </p></div>
            </div>

            <div class="col-start-2 row-start-3 h-52 w-96 rounded-3xl bg-[#F6F6F6] drop-shadow-xl">
                <div class="w-full pl-8 m-8 text-5xl text-[#1E56A0]">20% off</div>
                <div class="w-10/12 m-6 text-lg font-semibold"><p>En servicios de mantenimiento de vehículos como: “cambio de aceite o ajuste	 de frenos” (1000 puntos).</p></div>
            </div>
        </div>

    </div>
>>>>>>> Stashed changes
</div>
@endsection

