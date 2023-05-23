@extends('layout')
@section('content')
@auth
    <!--Vista de infracciones-->
    <div class="h-auto w-5/6 m-auto">
        <!--Tarjeta de datos de vehiculo-->
        <div class="w-full h-56 bg-[#D9D9D9] rounded-md ">
            <h1 class="text-center text-5xl py-8 font-extrabold text-black">Datos del Vehículo</h1>
            <div class="grid grid-cols-3 grid-rows-2 px-8">
<<<<<<< Updated upstream
                <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Marca:  </p><p class="text-xl col-span-2">Chevrolet</p></div>
                <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Modelo: </p><p class="text-xl col-span-2">2020</p></div>
                <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Placa:  </p><p class="text-xl col-span-2">UDA-523-A</p></div>
                <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Línea:  </p><p class="text-xl col-span-2">Silverado</p></div>
                <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Tipo:   </p><p class="text-xl col-span-2">PickUP</p></div>
=======
                <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Marca:  </p><p class="text-xl col-span-2">Honda</p></div>
                <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Modelo: </p><p class="text-xl col-span-2">2015</p></div>
                <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Placa:  </p><p class="text-xl col-span-2">141-YFD</p></div>
                <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Línea:  </p><p class="text-xl col-span-2">City</p></div>
                <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Tipo:   </p><p class="text-xl col-span-2">Sedán</p></div>
>>>>>>> Stashed changes
            </div>

        </div>

        <div class="h-16"></div>
        <!--titulo de infracción-->
        <div class="h-20 w-full text-center py-6 text-4xl font-extrabold text-[#1E56A0]"> Infracciones</div>
        <!--Columnas de las infracciones-->
        <div class="w-full grid grid-cols-10 text-center py-4 border-t-4 border-[#D9D9D9]">
            <div class="col-start-1 text-2xl font-bold">No. Folio Multa</div>
            <div class="col-start-2 text-2xl font-bold">Placa </div>
            <div class="col-start-3 text-2xl font-bold">Fecha  Infracción</div>
            <div class="col-start-4 text-2xl font-bold">Lugar</div>
<<<<<<< Updated upstream
            <div class="col-start-5 text-2xl font-bold">Límite de velocidad</div>
            <div class="col-start-6 text-2xl font-bold">Velocidad Detectada</div>
            <div class="col-start-7 text-2xl font-bold">Importe real</div>
            <div class="col-start-8 text-2xl font-bold">Importe a pagar</div>
=======
            <div class="col-start-5 text-2xl font-bold">Límite de Velocidad</div>
            <div class="col-start-6 text-2xl font-bold">Velocidad Detectada</div>
            <div class="col-start-7 text-2xl font-bold">Importe Real</div>
            <div class="col-start-8 text-2xl font-bold">Importe a Pagar</div>
>>>>>>> Stashed changes
            <div class="col-start-9 text-2xl font-bold">Estado de Infracción</div>
            <div class="col-start-10 text-2xl font-bold">Puntaje</div>
        </div>
        <!--Datos de infracciones-->
        <div class="w-full grid grid-cols-10 text-center py-4 border-t-2 border-[#D9D9D9]">
            <div class="col-start-1 text-xl pt-4">1</div>
            <div class="col-start-2 text-xl">141-YFD</div>
            <div class="col-start-3 text-xl pt-4">20/03/2023 <br> 8:56:12</div>
            <div class="col-start-4 text-xl">Blvd. Rafael Moreno Valle (Bajo puente Altura km 125+000 Sentido Veracruz)</div>
            <div class="col-start-5 text-xl">90 Kh</div>
            <div class="col-start-6 text-xl pt-4">103 Kh</div>
            <div class="col-start-7 text-xl pt-4">$962.00</div>
            <div class="col-start-8 text-xl pt-4">$722.00</div>
            <div class="col-start-9 text-xl pt-4"><div class="bg-[#008f39] rounded-lg w-3/4 h-8 p-1 mx-6 text-white">PAGADO</div></div>
            <div class="col-start-10 text-2xl pt-4 "><span class="text-[#DE0202]">-4</span> / <span class="text-[#0AE100]">+2</span> </div>
        </div>

        <div class="w-3/4 mx-auto grid grid-cols-2 gap-x-20">
            <!--Foto del automovil-->
            <div class="col-start-1 row-star-1 w-full alto-foto  m-auto text-center" style="background-image:url(/img/documentos/fotomulta.jpg); background-size: 100%; background-position:center;background-repeat: no-repeat;"></div>
            <!--Foto de la placa-->
            <div class="col-start-2 row-star-1 w-full alto-foto mt-10 m-auto text-center" style="background-image:url(/img/documentos/fotomulta2.jpg); background-size: 100%; background-position:center;background-repeat: no-repeat;"></div>
        </div>



        <!--División de botón de regreso-->
        <div class="h-28"></div>

        <!--botón de regreso-->
        <div class="button p-1 w-28 mb-10 bg-[#EB455F] rounded-lg text-center text-white transition ease-in-out delay-150  hover:-translate-1 hover:scale-105 hover:bg-[#D61C4E] duration-100">
            <a href="/menu_tramites">
                <div class="font-medium w-auto m-auto font-just text-xl">
                    <span class="py-4">
<<<<<<< Updated upstream
                        regresar
=======
                        Regresar
>>>>>>> Stashed changes
                    </span>
                </div>
            </a>
        </div>
    </div>
@endauth

@guest
    <!--Vista de infracciones-->
    <div class="h-auto w-5/6 m-auto">
            <!--Tarjeta de datos de vehiculo-->
            <div class="w-full h-56 bg-[#D9D9D9] rounded-md ">
                <h1 class="text-center text-5xl py-8 font-extrabold">Datos del Vehículo</h1>
                <div class="grid grid-cols-3 grid-rows-2 px-8">
<<<<<<< Updated upstream
                    <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Marca:  </p><p class="text-xl col-span-2">Chevrolet</p></div>
                    <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Modelo: </p><p class="text-xl col-span-2">2020</p></div>
                    <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Placa:  </p><p class="text-xl col-span-2">UDA-523-A</p></div>
                    <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Línea:  </p><p class="text-xl col-span-2">Silverado</p></div>
                    <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Tipo:   </p><p class="text-xl col-span-2">PickUP</p></div>
=======
                    <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Marca:  </p><p class="text-xl col-span-2">---------</p></div>
                    <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Modelo: </p><p class="text-xl col-span-2">------</p></div>
                    <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Placa:  </p><p class="text-xl col-span-2">--------</p></div>
                    <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Línea:  </p><p class="text-xl col-span-2">-------</p></div>
                    <div class="grid grid-cols-3"><p class="font-extrabold text-2xl h-16">Tipo:   </p><p class="text-xl col-span-2">------</p></div>
>>>>>>> Stashed changes
                </div>

            </div>

            <div class="h-16"></div>
            <!--titulo de infracción-->
            <div class="h-20 w-full text-center py-6 text-4xl font-extrabold text-[#1E56A0]"> Infracciones</div>
            <!--Columnas de las infracciones-->
<<<<<<< Updated upstream
            <div class="w-full grid grid-cols-9 text-center py-4 border-t-4 border-[#D9D9D9]">
=======
            <div class="w-full grid grid-cols-10 text-center py-4 border-t-4 border-[#D9D9D9]">
>>>>>>> Stashed changes
                <div class="col-start-1 text-2xl font-bold">No. Folio Multa</div>
                <div class="col-start-2 text-2xl font-bold">Placa </div>
                <div class="col-start-3 text-2xl font-bold">Fecha  Infracción</div>
                <div class="col-start-4 text-2xl font-bold">Lugar</div>
                <div class="col-start-5 text-2xl font-bold">Límite de velocidad</div>
                <div class="col-start-6 text-2xl font-bold">Velocidad Detectada</div>
                <div class="col-start-7 text-2xl font-bold">Importe real</div>
                <div class="col-start-8 text-2xl font-bold">Importe a pagar</div>
                <div class="col-start-9 text-2xl font-bold">Estado de Infracción</div>
<<<<<<< Updated upstream
=======
                <div class="col-start-10 text-2xl font-bold">Puntaje</div>
>>>>>>> Stashed changes
            </div>

            <div class="w-full grid grid-cols-9 text-center py-4 border-t-4 border-[#D9D9D9] pt-10">
                <div class="col-start-1 col-span-9 text-2xl font-bold text-[#1E56A0] w-fit mx-auto border-4 rounded-xl border-[#D6E4F0]"><p class="p-4"> Inicie sesión para poder visualizar sus fotomultas.</p></div>
            </div>

        <!--División de botón de regreso-->
        <div class="h-28"></div>

        <!--botón de regreso-->
        <div class="button p-1 w-28 mb-10 bg-[#EB455F] rounded-lg text-center text-white transition ease-in-out delay-150  hover:-translate-1 hover:scale-105 hover:bg-[#D61C4E] duration-100">
            <a href="/menu_tramites">
                <div class="font-medium w-auto m-auto font-just text-xl">
                    <span class="py-4">
<<<<<<< Updated upstream
                        regresar
=======
                        Regresar
>>>>>>> Stashed changes
                    </span>
                </div>
            </a>
        </div>
    </div>
@endguest

@endsection
