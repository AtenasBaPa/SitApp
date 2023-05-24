@extends('layout')
@section('content')
@auth
<!--Vista de infracciones-->
<div class="h-auto w-3/4 m-auto">
    <!--Tarjeta de datos de vehiculo-->
    <div class="w-full h-56 bg-[#D9D9D9] rounded-md ">
        <h1 class="text-center text-4xl py-8 font-extrabold">Datos del Vehículo</h1>
        <div class="grid grid-cols-3 grid-rows-2 px-8">
            <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Marca:  </p><p class="text-xl col-span-2">Honda</p></div>
            <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Modelo: </p><p class="text-xl col-span-2">2020</p></div>
            <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Placa:  </p><p class="text-xl col-span-2">UDA-523-A</p></div>
            <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Línea:  </p><p class="text-xl col-span-2">City</p></div>
            <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Tipo:   </p><p class="text-xl col-span-2">Sedán</p></div>
        </div>

    </div>

    <div class="h-16"></div>
    <!--titulo de infracción-->
    <div class="h-20 w-full text-center py-6 text-4xl font-extrabold text-[#1E56A0]"> Infracciones</div>
    <!--Columnas de las infracciones-->
    <div class="w-full grid grid-cols-8 text-center py-4 border-t-4 border-[#D9D9D9]">
        <div class="col-start-1 text-xl font-bold">No. de <br> Infracción</div>
        <div class="col-start-2 text-xl font-bold">No. Folio <br> Infracción</div>
        <div class="col-start-3 text-xl font-bold pt-4">Placa</div>
        <div class="col-start-4 text-xl font-bold">Fecha <br> Infracción</div>
        <div class="col-start-5 text-xl font-bold pt-4">Artículo</div>
        <div class="col-start-6 text-xl font-bold">Importe a <br> Pagar</div>
        <div class="col-start-7 text-xl font-bold">Estado de <br> Infracción</div>
        <div class="col-start-8 text-xl font-bold">Puntaje</div>
    </div>
    <!--Datos de infracciones-->
    <div class="w-full grid grid-cols-8 text-center py-4 border-t-2 border-[#D9D9D9] content-center">
        <div class="col-start-1 text-xl pt-4">1</div>
        <div class="col-start-2 text-xl pt-4">15486</div>
        <div class="col-start-3 text-xl pt-4">UDA-523-A</div>
        <div class="col-start-4 text-xl">20/03/2023 <br> 8:56:12</div>
        <label class="w-28 h-10 rounded-full m-auto" for="btn-modal1"><div class="col-start-5 text-lg boton-modal mx-auto w-28 h-10 bg-[#FFFFFF] hover:bg-[#ECECE7] text-[#1E56A0] font-bold py-2 px-4 rounded-full"> ART. 11</div></label>
        <div class="col-start-6 text-xl pt-4">$505.00</div>
        <div class="col-start-7 text-xl pt-4"><div class="bg-[#008f39] rounded-lg w-3/4 h-8 p-1 mx-6 text-white">PAGADO</div></div>
        <div class="col-start-8 text-2xl pt-4 "><span class="text-[#DE0202]">-4</span> / <span class="text-[#0AE100]">+2</span> </div>
    </div>

    <!--Datos de infracciones 2-->
    <div class="w-full grid grid-cols-8 text-center py-4 border-t-2 border-[#D9D9D9] content-center">
        <div class="col-start-1 text-xl pt-4">2</div>
        <div class="col-start-2 text-xl pt-4">15235</div>
        <div class="col-start-3 text-xl pt-4">UDA-523-A</div>
        <div class="col-start-4 text-xl">27/03/2023 <br> 10:22:52</div>
        <label class="w-28 h-10 rounded-full m-auto" for="btn-modal2"><div class="col-start-5 text-lg boton-modal mx-auto w-28 h-10 bg-[#FFFFFF] hover:bg-[#ECECE7] text-[#1E56A0] font-bold py-2 px-4 rounded-full"> ART. 38</div></label>
        <div class="col-start-6 text-xl pt-4">$550.00</div>
        <div class="col-start-7 text-xl pt-4"><div class="bg-[#008f39] rounded-lg w-3/4 h-8 p-1 mx-6 text-white">PAGADO</div></div>
        <div class="col-start-8 text-2xl pt-4 "><span class="text-[#DE0202]">-4</span> / <span class="text-[#0AE100]">+2</span> </div>
    </div>

    <!--Datos de infracciones 3-->
    <div class="w-full grid grid-cols-8 text-center py-4 border-t-2 border-[#D9D9D9] content-center">
        <div class="col-start-1 text-xl pt-4">3</div>
        <div class="col-start-2 text-xl pt-4">15684</div>
        <div class="col-start-3 text-xl pt-4">UDA-523-A</div>
        <div class="col-start-4 text-xl">30/03/2023 <br> 07:10:23</div>
        <label class="w-28 h-10 rounded-full m-auto" for="btn-modal3"><div class="col-start-5 text-lg boton-modal mx-auto w-28 h-10 bg-[#FFFFFF] hover:bg-[#ECECE7] text-[#1E56A0] font-bold py-2 px-4 rounded-full"> ART. 84</div></label>
        <div class="col-start-6 text-xl pt-4">$1000.00</div>
        <div class="col-start-7 text-xl pt-4"><div class="bg-[#cb3234] rounded-lg w-3/4 h-8 p-1 mx-6 text-white">PENDIENTE</div></div>
        <div class="col-start-8 text-2xl pt-4 "><span class="text-[#DE0202]">-4</span> </div>
    </div>

    <!--Datos de infracciones 4-->
    <div class="w-full grid grid-cols-8 text-center py-4 border-t-2 border-[#D9D9D9] content-center">
        <div class="col-start-1 text-xl pt-4">4</div>
        <div class="col-start-2 text-xl pt-4">15354</div>
        <div class="col-start-3 text-xl pt-4">UDA-523-A</div>
        <div class="col-start-4 text-xl">31/07/2023 <br> 09:24:43</div>
        <label class="w-28 h-10 rounded-full m-auto" for="btn-modal4"><div class="col-start-5 text-lg boton-modal mx-auto w-28 h-10 bg-[#FFFFFF] hover:bg-[#ECECE7] text-[#1E56A0] font-bold py-2 px-4 rounded-full"> ART. 23</div></label>
        <div class="col-start-6 text-xl pt-4">$1630.00</div>
        <div class="col-start-7 text-xl pt-4"><div class="bg-[#008f39] rounded-lg w-3/4 h-8 p-1 mx-6 text-white">PAGADO</div></div>
        <div class="col-start-8 text-2xl pt-4 "><span class="text-[#DE0202]">-4</span> / <span class="text-[#0AE100]">+2</span> </div>
    </div>

    <!--Datos de infracciones 5-->
    <div class="w-full grid grid-cols-8 text-center py-4 border-t-2 border-[#D9D9D9] content-center">
        <div class="col-start-1 text-xl pt-4">5</div>
        <div class="col-start-2 text-xl pt-4">15168</div>
        <div class="col-start-3 text-xl pt-4">UDA-523-A</div>
        <div class="col-start-4 text-xl">12/08/2023 <br> 12:05:54</div>
        <label class="w-28 h-10 rounded-full m-auto" for="btn-modal5"><div class="col-start-5 text-lg boton-modal mx-auto w-28 h-10 bg-[#FFFFFF] hover:bg-[#ECECE7] text-[#1E56A0] font-bold py-2 px-4 rounded-full"> ART. 26</div></label>
        <div class="col-start-6 text-xl pt-4">$2980.00</div>
        <div class="col-start-7 text-xl pt-4"><div class="bg-[#cb3234] rounded-lg w-3/4 h-8 p-1 mx-6 text-white">PENDIENTE</div></div>
        <div class="col-start-8 text-2xl pt-4 "><span class="text-[#DE0202]">-4</span> </div>
    </div>


    <!--División de botón de regreso-->
    <div class="h-28"></div>

    <!--botón de regreso-->
    <div class="button p-1 w-28 mb-10 bg-[#EB455F] rounded-lg text-center text-white transition ease-in-out delay-150  hover:-translate-1 hover:scale-105 hover:bg-[#D61C4E] duration-100">
        <a href="/menu_tramites">
            <div class="font-medium w-auto m-auto font-just text-xl">
                <span class="py-4">
                    Regresar
                </span>
            </div>
        </a>
    </div>
</div>

<!--Ventana Modal1-->
<input type="checkbox" id="btn-modal1">
    <div class="container-modal1">
        <div class="content-modal1">
            <h2 class="text-2xl text-[#1E56A0] font-semibold">ARTÍCULO 11</h2>
            <p class="text-justify">
                Conducir sin licencia o con licencia vencida: <br><br>
                Esta infracción está relacionada con el artículo
                11 fracción I y III del Reglamento de Tránsito
                del Estado de Puebla, que establece la obligatoriedad
                de contar con una licencia de conducir vigente.
            </p>
            <div class="btn-cerrar1">
                <label for="btn-modal1">Cerrar</label>
            </div>
        </div>
        <label for="btn-modal1" class="cerrar-modal1"></label>
    </div>
<!--Fin de Ventana Modal1-->

<!--Ventana Modal2-->
<input type="checkbox" id="btn-modal2">
    <div class="container-modal2">
        <div class="content-modal2">
            <h2 class="text-2xl text-[#1E56A0] font-semibold">ARTICULO 38 </h2>
            <p class="text-justify">
                No portar cinturón de seguridad: <br><br>
                Esta infracción está relacionada con el
                artículo 38 fracción II del Reglamento de
                Tránsito del Estado de Puebla, que establece
                la obligatoriedad de utilizar el cinturón de
                seguridad tanto para el conductor como para
                los pasajeros.
            </p>
            <div class="btn-cerrar2">
                <label for="btn-modal2">Cerrar</label>
            </div>
        </div>
        <label for="btn-modal2" class="cerrar-modal2"></label>
    </div>
<!--Fin de Ventana Modal2-->

<!--Ventana Modal3-->
<input type="checkbox" id="btn-modal3">
    <div class="container-modal3">
        <div class="content-modal3">
            <h2 class="text-2xl text-[#1E56A0] font-semibold">ARTICULO 84</h2>
            <p class="text-justify">
                    Hablar por teléfono celular mientras se conduce: <br></br>
                    Esta infracción está relacionada con el artículo
                    84 del Reglamento de Tránsito del Estado de Puebla,
                    que prohíbe el uso de dispositivos móviles mientras
                    se conduce, salvo que se utilicen dispositivos de
                    manos libres.
            </p>
            <div class="btn-cerrar3">
                <label for="btn-modal3">Cerrar</label>
            </div>
        </div>
        <label for="btn-modal3" class="cerrar-modal3"></label>
    </div>
<!--Fin de Ventana Modal3-->

<!--Ventana Modal4-->
<input type="checkbox" id="btn-modal4">
    <div class="container-modal4">
        <div class="content-modal4">
            <h2 class="text-2xl text-[#1E56A0] font-semibold">ARTICULO 23</h2>
            <p class="text-justify">
                Exceder los límites de velocidad: <br><br>
                Esta infracción está relacionada con
                el artículo 23 fracción II del Reglamento
                de Tránsito del Estado de Puebla, que
                establece los límites de velocidad para
                diferentes tipos de vías y zonas, así como
                las sanciones por excederlos.
            </p>
            <div class="btn-cerrar4">
                <label for="btn-modal4">Cerrar</label>
            </div>
        </div>
        <label for="btn-modal4" class="cerrar-modal4"></label>
    </div>
<!--Fin de Ventana Modal4-->

<!--Ventana Modal5-->
<input type="checkbox" id="btn-modal5">
    <div class="container-modal5">
        <div class="content-modal5">
            <h2 class="text-2xl text-[#1E56A0] font-semibold">ARTICULO 26</h2>
            <p class="text-justify">
                No respetar los semáforos: <br><br>
                Esta infracción está relacionada con el
                artículo 26 del Reglamento de Tránsito
                del Estado de Puebla, que establece las
                obligaciones de los conductores al acercarse
                a un semáforo y las sanciones por no respetarlo.
            </p>
            <div class="btn-cerrar5">
                <label for="btn-modal5">Cerrar</label>
            </div>
        </div>
        <label for="btn-modal5" class="cerrar-modal5"></label>
    </div>
<!--Fin de Ventana Modal5-->
@endauth

@guest
<!--Vista de infracciones-->
<div class="h-auto w-3/4 m-auto">
    <!--Tarjeta de datos de vehiculo-->
    <div class="w-full h-56 bg-[#D9D9D9] rounded-md ">
        <h1 class="text-center text-4xl py-8 font-extrabold">Datos del Vehículo</h1>
        <div class="grid grid-cols-3 grid-rows-2 px-8">
            <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Marca:  </p><p class="text-xl col-span-2">Chevrolet</p></div>
            <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Modelo: </p><p class="text-xl col-span-2">2020</p></div>
            <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Placa:  </p><p class="text-xl col-span-2">UDA-523-A</p></div>
            <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Línea:  </p><p class="text-xl col-span-2">Silverado</p></div>
            <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Tipo:   </p><p class="text-xl col-span-2">PickUP</p></div>
        </div>

    </div>

    <div class="h-16"></div>
    <!--titulo de infracción-->
    <div class="h-20 w-full text-center py-6 text-4xl font-extrabold text-[#1E56A0]"> Infracciones</div>
    <!--Columnas de las infracciones-->
    <div class="w-full grid grid-cols-8 text-center py-4 border-t-4 border-[#D9D9D9]">
        <div class="col-start-1 text-xl font-bold">No. de <br> Infracción</div>
        <div class="col-start-2 text-xl font-bold">No. Folio <br> Infracción</div>
        <div class="col-start-3 text-xl font-bold pt-4">Placa</div>
        <div class="col-start-4 text-xl font-bold">Fecha <br> Infracción</div>
        <div class="col-start-5 text-xl font-bold pt-4">Artículo</div>
        <div class="col-start-6 text-xl font-bold">Importe a <br> Pagar</div>
        <div class="col-start-7 text-xl font-bold">Estado de <br> Infracción</div>
    </div>

    <div class="w-full grid grid-cols-9 text-center py-4 border-t-4 border-[#D9D9D9] pt-10">
        <div class="col-start-1 col-span-9 text-2xl font-bold text-[#1E56A0] w-fit mx-auto border-4 rounded-xl border-[#D6E4F0]"><p class="p-4"> Inicie sesión para poder visualizar sus multas.</p></div>
    </div>


    <!--División de botón de regreso-->
    <div class="h-28"></div>

    <!--botón de regreso-->
    <div class="button p-1 w-28 mb-10 bg-[#EB455F] rounded-lg text-center text-white transition ease-in-out delay-150  hover:-translate-1 hover:scale-105 hover:bg-[#D61C4E] duration-100">
        <a href="/menu_tramites">
            <div class="font-medium w-auto m-auto font-just text-xl">
                <span class="py-4">
                    Regresar
                </span>
            </div>
        </a>
    </div>
</div>
@endguest
@endsection
