@extends('layout')
@section('content')

<div class="w-3/5 m-auto">
    <div class="grid grid-cols-6 grid-rows-11 gap-6">
        <div class="col-start-1 col-span-4">
            <div class="text-5xl"><p class="border-b-4 w-52 border-[#1E56A0]"> Puebla</p></div>
        </div>

        <div class="col-start-5 col-span-2">
            <section class="grid grid-cols-3">
                <p class="text-xl col-start-1 text-right my-auto pl-20">Siguenos</p>
                <div class="w-1/2 h-20 col-start-2 ml-10 my-auto" style="background-image:url(/img/facebook.png); background-size: 70%; background-position:center;background-repeat: no-repeat;"></div>
                <div class="w-1/2 h-20 col-star-3 my-auto -ml-8" style="background-image:url(/img/twitter2.png); background-size: 70%; background-position:center;background-repeat: no-repeat;"></div>
            </section>
        </div>

        <div class="col-start-1 col-end-5 row-start-2 row-span-5 h-96 border-4" style="background-image:url(/img/noticias/noticia1.png); background-size: 100%; background-position:center;background-repeat: no-repeat;"></div>
        <a href="/noticia1" class="col-start-1 col-end-5 row-start-7 text-4xl font-semibold transition-colors duration-500 hover:text-[#1E56A0]">Movilidad de Puebla capital trabaja en tendido de nuevas ciclovías</a>
        <div class="col-start-1 col-end-5 row-start-8 text-justify text-xl">La subsecretaria de Movilidad, Rubí Vázquez Cruz, dijo que el gobierno de la ciudad compartió a colectivos de ciclistas el programa de trabajo 2023. <br><br> Luego de recordar de la existencia de un presupuesto de 30 millones de pesos para desarrollar los trabajos de rehabilitación de la infraestructura ciclista de Puebla y la creación de 15 kilómetros más de ciclovías,</div>
        <div class="text-xl col-start-5 col-span-2 row-start-2 h-52 border-4" style="background-image:url(/img/noticias/noticia2.png); background-size: 100%; background-position:center;background-repeat: no-repeat;"></div>

        <a href="/noticia2" class="col-start-5 col-span-2 row-start-3 text-2xl font-semibold transition-colors duration-500 hover:text-[#1E56A0]">Amplían plazo para verificación del transporte, solo en algunos casos.</a>

        <div class="col-start-1 col-span-7 row-start-8 mt-10 w-full text-xl font-bold text-center border-b-4">
            <p class="relative group">
                <span class="absolute inset-0 w-20 m-auto border-b-4 border-[#1E56A0] transition-width duration-500 group-hover:w-72"></span>
                <span class="relative border-b-[#1E56A0]">ÚLTIMAS NOTICIAS</span>
            </p>
        </div>

        <div class="col-start-1 col-span-2 row-start-9 w-full h-52 border-4" style="background-image:url(/img/noticias/noticia3.png); background-size: 100%; background-position:center;background-repeat: no-repeat;"></div>
        <div class="col-start-3 col-span-2 row-start-9 w-full h-52 border-4" style="background-image:url(/img/noticias/noticia4.png); background-size: 100%; background-position:center;background-repeat: no-repeat;"></div>
        <div class="col-start-5 col-span-2 row-start-9 w-full h-52 border-4" style="background-image:url(/img/noticias/noticia5.png); background-size: 100%; background-position:center;background-repeat: no-repeat;"></div>

        <a href="/noticia3" class="col-start-1 col-span-2 row-start-9 w-full text-xl font-bold transition-colors duration-500 hover:text-[#1E56A0]">Portarán cámaras corporales los policías que vigilarán verificación vehicular.</a>
        <a href="/noticia4" class="col-start-3 col-span-2 row-start-9 w-full text-xl font-bold transition-colors duration-500 hover:text-[#1E56A0]">Puebla tendrá Sistema Estatal de Movilidad y Seguridad Vial.</a>
        <a href="/noticia5" class="col-start-5 col-span-2 row-start-9 w-full text-xl font-bold transition-colors duration-500 hover:text-[#1E56A0]">Instalarán alrededor de 40 pasos peatonales en las principales calles de Puebla.</a>

    </div>
</div>
@endsection
