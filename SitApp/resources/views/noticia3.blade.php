@extends('layout')
@section('content')
    <div class="w-3/6 m-auto">
        <p class="text-5xl text-left font-bold ">Portarán cámaras corporales los policías que vigilarán verificación vehicular</p>
        <div class="grid grid-rows-2 py-8">
            <div class="row-star-1 text-lg"><span>Por  </span><span class="text-[#1E56A0]">Unkown Person</span></div>
            <div class="row-star-2 text-md"><p>07:00 ET(11:00 GMT) 12 Mayo, 2023</p></div>
        </div>

        <div class="grid grid-cols-9 grid-flow-row auto-rows-max gap-x-9">
            <div class="col-start-1 col-span-6 row-start-1 row-span-4 border-2 w-full container-video" style="background-image:url(/img/noticias/noticia3.png); background-size: 100%; background-position:center;background-repeat: no-repeat;"></div>
            <div class="col-start-1 col-span-6 row-start-5 border-b-2 border-gray pt-4">Digital, M. (2020, 5 junio).  </div>
            <div class="col-start-1 col-span-6 row-start-6 text-justify text-xl">
                <p class="py-4">
                    Los policías estatales encargados de vigilar el cumplimiento de la 
                    verificación vehicular en Puebla tendrán cámaras conectadas directamente
                    al C5 de la Secretaría de Seguridad Pública (SSP) del estado, con el
                    objetivo de evitar irregularidades, informó el titular de la
                    dependencia, Iván Cruz Luna.
                </p>
                <p class="py-4">
                    Confirmó que, hasta el momento, hay 57 uniformados capacitados
                    para participar en los operativos, aunque en la siguiente semana
                    un número similar comenzará su preparación para sumarse a las
                    revisiones.
                </p>
                <p class="py-4">
                    Agregó que a lo largo del año se integrarán más oficiales que
                    estarán a cargo de vigilar el cumplimiento del Programa de
                    Verificación Vehicular.
                </p>
                <p class="py-4">
                    Cruz Luna explicó que los policías portarán un chaleco verde
                    oscuro con la leyenda “Seguridad y Proximidad en Caminos”. 
                    Además, cargarán con cámaras corporales que trasmitirán en
                    directo al C5.
                </p>
                <p class="py-4">
                    Indicó que, a través de ellas, los mandos podrán escuchar y
                    ver todo lo que ocurra durante los operativos de inspección.
                </p>
                <p>
                    A partir del 1 de enero de este año, la verificación vehicular
                    es obligatoria para todos los automotores particulares del
                    estado de Puebla, mientras que las unidades del transporte
                    público tuvieron que haber cumplido con el requisito en las
                    últimas 10 semanas de 2022.
                </p>
                <p class="py-4">
                    La Secretaría de Movilidad y Transporte (SMT) anunció que,
                    a partir de la segunda quincena de enero, comenzará con el
                    retiro de los colectivos que contaminen, aunque desde este
                    momento, los concesionarios ya pueden ser multados por no
                    haber verificado.
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
                    <div class="border-2 col-start-1 row-star-5 row-span-2 tajeta-noticia" style="background-image:url(/img/noticias/noticia4.png); background-size: 100%; background-position:center;background-repeat: no-repeat;"></div>
                    <a href="/noticia4" class="col-start-1 row-star-6 text-xl mt-4 mb-4 transition-colors duration-500 hover:text-[#1E56A0]"><p class="">Puebla tendrá Sistema Estatal de Movilidad y Seguridad Vial.</p></a>
                    <div class="border-2 col-start-1 row-star-7 row-span-2 tajeta-noticia" style="background-image:url(/img/noticias/noticia5.png); background-size: 100%; background-position:center;background-repeat: no-repeat;"></div>
                    <a href="/noticia5" class="col-start-1 row-star-8 text-xl mt-4 mb-4 transition-colors duration-500 hover:text-[#1E56A0]"><p class="">Instalarán alrededor de 40 pasos peatonales en las principales calles de Puebla.</p></a>
                </div>
            </div>

        </div>
    </div>
@endsection
