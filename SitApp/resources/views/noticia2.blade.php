@extends('layout')
@section('content')
    <div class="w-3/6 m-auto">
        <p class="text-5xl text-left font-bold ">Amplían plazo para verificación del transporte, solo en algunos casos</p>
        <div class="grid grid-rows-2 py-8">
            <div class="row-star-1 text-lg"><span>Por  </span><span class="text-[#1E56A0]"> Unkown Person</span></div>
            <div class="row-star-2 text-md"><p>07:00 ET(11:00 GMT) 12 Mayo, 2023</p></div>
        </div>

        <div class="grid grid-cols-9 grid-flow-row auto-rows-max gap-x-9">
            <div class="col-start-1 col-span-6 row-start-1 row-span-4 border-2 w-full container-video" style="background-image:url(/img/imagen-prueba.png); background-size: 70%; background-position:center;background-repeat: no-repeat;"></div>
            <div class="col-start-1 col-span-6 row-start-5 border-b-2 border-gray pt-4">Frase de enganche de video</div>
            <div class="col-start-1 col-span-6 row-start-6 text-justify text-xl">
                <p class="py-4">
                    El Gobierno de Puebla amplió un semestre el plazo para que el transporte
                    público cumpla con la verificación vehicular, aunque solamente en los
                    municipios donde no existan verificentros, dio a conocer el titular del
                    Poder Ejecutivo, Sergio Salomón Céspedes Peregrina.
                </p>
                <p class="py-4">
                    Las unidades que estén registradas en la capital, San Andrés Cholula,
                    Huejotzingo, San Martín Texmelucan, Atlixco y Tehuacán, donde sí hay 
                    16 centros de verificación, deberán cumplir con la medida, dijo Beatriz
                    Manrique Guevara, titular de la Secretaría de Medio Ambiente, Desarrollo
                    Sustentable y Ordenamiento Territorial (SMADSOT).
                </p>
                <p class="py-4">
                    Solamente el 10 por ciento de los 36 mil automotores concesionados han
                    respondido a su obligación, entre ellos todos los pertenecientes a las
                    líneas 3 y 2 de la Red Urbana de Transporte Articulado (RUTA), y parte
                    de la Línea 1.
                </p>
                <p class="py-4 text-3xl font-bold">
                    Sanciones
                </p>
                <p class="py-4">
                    Elsa María Bracamonte González, secretaria de Movilidad y Transporte,
                    afirmó que durante 15 días no se retirará de la circulación a los 
                    transportistas que hayan incumplido con la verificación en las seis
                    demarcaciones con verificentros, por lo que los llamó a realizarla.
                </p>
                <p>
                    Sin embargo, aceptó que podrán ser multados, además de que después
                    de ese periodo comenzará la detención de las unidades que contaminen
                    de manera evidente.
                </p>
                <p class="py-4">
                    Descartó que esta última medida afecte a los usuarios del transporte
                    público, ya que existe capacidad de las autoridades para suplir los
                    vehículos retirados.
                </p>
                <p class="py-4 italic text-center">
                    “Estamos preparados para ir supliendo las unidades que salgan, irlas
                    supliendo, porque estamos hablando que hay un parque vehicular de 36
                    mil unidades, entonces tenemos capacidad para ir supliendo esas unidades
                    que se saquen”.
                </p>
                <p class="py-4">
                    También llamó a los concesionarios a cambiar los automotores con más
                    de 10 años de antigüedad, como lo marca la ley, además de advertir que
                    la verificación será uno de los cinco documentos que se pedirán en la
                    revista vehicular de este año.
                </p>
                <p class="py-4 text-3xl font-bold">
                    Operativos
                </p>
                <p class="py-4">
                    El gobernador, Sergio Salomón Céspedes Peregrina, dio a conocer que
                    la Secretaría de la Función Pública (SFP) estará presente en los
                    operativos para detectar vehículos que no hayan cumplido con la
                    verificación en Puebla, con la finalidad de que estén apegados a
                    derecho y darles transparencia.
                </p>
                <p class="py-4">
                    También participarán elementos de Seguridad Pública, de Movilidad
                    y Transporte, además de la SMADSOT, explicó en conferencia de prensa.
                </p>
                <p class="py-4">
                    Recordó que las reglas se hicieron para cumplirlas y que no se
                    permitirá ningún “arreglo en lo oscuro”, en las revisiones de 
                    gases contaminantes.
                </p>
            </div>
            <div class="col-start-7 col-span-3 relative group text-center text-xl font-semibold mb-4">
                <span class="absolute inset-0 w-20 m-auto border-b-4 border-[#1E56A0] transition-width duration-500 group-hover:w-72"></span>
                <span class="w-10/12 relative border-b-[#1E56A0]">MÁS DE PUEBLA</span>
            </div>
            <div class="col-start-7 col-span-3 row-span-6">
                <div class="grid grid-cols-1 grid-rows-6">
                    <div class="border-2 col-start-1 row-star-1 row-span-2 tajeta-noticia" style="background-image:url(/img/imagen-prueba.png); background-size: 70%; background-position:center;background-repeat: no-repeat;"></div>
                    <a href="/noticia1" class="col-start-1 row-star-2 text-xl mt-2 mb-4 transition-colors duration-500 hover:text-[#1E56A0]"><p class="">Movilidad de Puebla capital trabaja en tendido de nuevas ciclovías.</p></a>
                    <div class="border-2 col-start-1 row-star-3 row-span-2 tajeta-noticia" style="background-image:url(/img/imagen-prueba.png); background-size: 70%; background-position:center;background-repeat: no-repeat;"></div>
                    <a href="/noticia3" class="col-start-1 row-star-4 text-xl mt-2 mb-4 transition-colors duration-500 hover:text-[#1E56A0]"><p class="">Portarán cámaras corporales los policías que vigilarán verificación vehicular.</p></a>
                    <div class="border-2 col-start-1 row-star-5 row-span-2 tajeta-noticia" style="background-image:url(/img/imagen-prueba.png); background-size: 70%; background-position:center;background-repeat: no-repeat;"></div>
                    <a href="/noticia4" class="col-start-1 row-star-6 text-xl mt-4 mb-4 transition-colors duration-500 hover:text-[#1E56A0]"><p class="">Puebla tendrá Sistema Estatal de Movilidad y Seguridad Vial.</p></a>
                    <div class="border-2 col-start-1 row-star-7 row-span-2 tajeta-noticia" style="background-image:url(/img/imagen-prueba.png); background-size: 70%; background-position:center;background-repeat: no-repeat;"></div>
                    <a href="/noticia5" class="col-start-1 row-star-8 text-xl mt-4 mb-4 transition-colors duration-500 hover:text-[#1E56A0]"><p class="">Instalarán alrededor de 40 pasos peatonales en las principales calles de Puebla.</p></a>
                </div>
            </div>

        </div>
    </div>
@endsection
