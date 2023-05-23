@extends('layout')
@section('content')
    <div class="w-3/6 m-auto">
        <p class="text-5xl text-left font-bold ">Puebla tendrá Sistema Estatal de Movilidad y Seguridad Vial</p>
        <div class="grid grid-rows-2 py-8">
            <div class="row-star-1 text-lg"><span>Por  </span><span class="text-[#1E56A0]">Unkown Person</span></div>
            <div class="row-star-2 text-md"><p>07:00 ET(11:00 GMT) 12 Mayo, 2023</p></div>
        </div>

        <div class="grid grid-cols-9 grid-flow-row auto-rows-max gap-x-9">
            <div class="col-start-1 col-span-6 row-start-1 row-span-4 border-2 w-full container-video" style="background-image:url(/img/noticias/noticia4.png); background-size: 100%; background-position:center;background-repeat: no-repeat;"></div>
            <div class="col-start-1 col-span-6 row-start-5 border-b-2 border-gray pt-4">Vázquez, L., & Vázquez, L. (2021, 25 septiembre).</div>
            <div class="col-start-1 col-span-6 row-start-6 text-justify text-xl">
                <p class="py-4">
                    Tras anunciar que Puebla será sede del Encuentro Nacional de Diputadas
                    y Diputados Locales por la Movilidad (ENDIMOV) el 6 y 7 de octubre en
                    el Centro Expositor, la secretaria de Movilidad y Transporte, Elsa
                    Bracamonte, anunció que se creará el Sistema Estatal de Movilidad y Transporte.
                </p>
                <p class="py-4">
                    En conferencia de prensa la funcionaria estatal, dijo que a partir
                    del 11 de octubre entra en funciones el Sistema Nacional, y en la
                    armonización de la ley se tendrá que crear uno a nivel local para
                    que se dé la coordinación interestatal.
                </p>
                <p class="py-4">
                    Elsa Bracamonte dejó en claro que, si hay un incumplimiento de las
                    normas de tránsito por parte de un operador del transporte público,
                    y causó daño a los usuarios, se retira la concesión y se inicia un
                    proceso.
                </p>
                <p class="py-4">
                    Al ser cuestionada, de cuántas concesiones se han retirado, evitó
                    dar una cifra, no obstante, reconoció que se han quitado concesiones
                    completas o solo por unidades, sin conocer el número exacto de ellas.
                </p>
                <p class="py-4">
                    De igual manera indicó que tampoco contaba con los datos de cuantas
                    concesiones han sido retiradas por la dependencia que encabeza, toda
                    vez que existen varios casos que se encuentran bajo procedimiento.
                </p>

            </div>
            <div class="col-start-7 col-span-3 relative group text-center text-xl font-semibold mb-4">
                <span class="absolute inset-0 w-20 m-auto border-b-4 border-[#1E56A0] transition-width duration-500 group-hover:w-72"></span>
                <span class="w-10/12 relative border-b-[#1E56A0]">MÁS DE PUEBLA</span>
            </div>
            <div class="col-start-7 col-span-3 row-span-6">
                <div class="grid grid-cols-1 grid-rows-6">
                    <div class="border-2 col-start-1 row-star-1 row-span-2 tajeta-noticia" style="background-image:url(/img/noticias/noticia1.png); background-size: 100%; background-position:center;background-repeat: no-repeat;"></div>
                    <a href="/noticia1" class="col-start-1 row-star-2 text-xl mt-2 mb-4 transition-colors duration-500 hover:text-[#1E56A0]"><p class="">Movilidad de Puebla capital trabaja en tendido de nuevas ciclovías.</p></a>
                    <div class="border-2 col-start-1 row-star-3 row-span-2 tajeta-noticia" style="background-image:url(/img/noticias/noticia2.png); background-size: 100%; background-position:center;background-repeat: no-repeat;"></div>
                    <a href="/noticia2" class="col-start-1 row-star-4 text-xl mt-2 mb-4 transition-colors duration-500 hover:text-[#1E56A0]"><p class="">Amplían plazo para verificación del transporte, solo en algunos casos</p></a>
                    <div class="border-2 col-start-1 row-star-5 row-span-2 tajeta-noticia" style="background-image:url(/img/noticias/noticia3.png); background-size: 100%; background-position:center;background-repeat: no-repeat;"></div>
                    <a href="/noticia3" class="col-start-1 row-star-6 text-xl mt-4 mb-4 transition-colors duration-500 hover:text-[#1E56A0]"><p class="">Portarán cámaras corporales los policías que vigilarán verificación vehicular</p></a>
                    <div class="border-2 col-start-1 row-star-7 row-span-2 tajeta-noticia" style="background-image:url(/img/noticias/noticia5.png); background-size: 100%; background-position:center;background-repeat: no-repeat;"></div>
                    <a href="/noticia5" class="col-start-1 row-star-8 text-xl mt-4 mb-4 transition-colors duration-500 hover:text-[#1E56A0]"><p class="">Instalarán alrededor de 40 pasos peatonales en las principales calles de Puebla.</p></a>
                </div>
            </div>

        </div>
    </div>
@endsection
