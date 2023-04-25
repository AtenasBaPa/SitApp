@extends('layout')
@section('content')
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
    <!--titulo de infracción-->
    <div class="h-20 w-full text-center py-6 text-3xl font-extrabold "> Infracciones</div>
    <!--Columnas de las infracciones-->
    <div class="w-full grid grid-cols-7 text-center py-4 border-t-4 border-[#D9D9D9]">
        <div class="col-start-1 text-xl font-bold">No. de <br> Infracción</div>
        <div class="col-start-2 text-xl font-bold">No. Folio <br> Infracción</div>
        <div class="col-start-3 text-xl font-bold pt-4">Placa</div>
        <div class="col-start-4 text-xl font-bold">Fecha <br> Infracción</div>
        <div class="col-start-5 text-xl font-bold pt-4">Artículo</div>
        <div class="col-start-6 text-xl font-bold">Importe a <br> Pagar</div>
        <div class="col-start-7 text-xl font-bold">Estado de <br> Infracción</div>
    </div>
    <!--Datos de infracciones-->
    <div class="w-full grid grid-cols-7 text-center py-4 border-t-2 border-[#D9D9D9] content-center">
        <div class="col-start-1 text-xl pt-4">1</div>
        <div class="col-start-2 text-xl pt-4">15486</div>
        <div class="col-start-3 text-xl pt-4">UDA-523-A</div>
        <div class="col-start-4 text-xl">20/03/2023 <br> 8:56:12</div>
        <div class="col-start-5 text-xl">ART. 12</div>
        <div class="col-start-6 text-xl pt-4">$505.00</div>
        <div class="col-start-7 text-xl pt-4"><div class="bg-[#008f39] rounded-lg w-3/4 h-8 p-1 mx-6 text-white">PAGADO</div></div>
    </div>

    <!--Datos de infracciones 2-->
    <div class="w-full grid grid-cols-7 text-center py-4 border-t-2 border-[#D9D9D9] content-center">
        <div class="col-start-1 text-xl pt-4">2</div>
        <div class="col-start-2 text-xl pt-4">15491</div>
        <div class="col-start-3 text-xl pt-4">UDA-523-A</div>
        <div class="col-start-4 text-xl">27/03/2023 <br> 10:22:52</div>
        <div class="col-start-5 text-xl">ART. 12</div>
        <div class="col-start-6 text-xl pt-4">$550.00</div>
        <div class="col-start-7 text-xl pt-4"><div class="bg-[#008f39] rounded-lg w-3/4 h-8 p-1 mx-6 text-white">PAGADO</div></div>
    </div>

    <!--Datos de infracciones 3-->
    <div class="w-full grid grid-cols-7 text-center py-4 border-t-2 border-[#D9D9D9] content-center">
        <div class="col-start-1 text-xl pt-4">3</div>
        <div class="col-start-2 text-xl pt-4">15691</div>
        <div class="col-start-3 text-xl pt-4">UDA-523-A</div>
        <div class="col-start-4 text-xl">30/03/2023 <br> 07:10:23</div>
        <div class="col-start-5 text-xl">ART. 16</div>
        <div class="col-start-6 text-xl pt-4">$1000.00</div>
        <div class="col-start-7 text-xl pt-4"><div class="bg-[#cb3234] rounded-lg w-3/4 h-8 p-1 mx-6 text-white">PENDIENTE</div></div>
    </div>


    <!--División de botón de regreso-->
    <div class="h-28"></div>

    <!--botón de regreso-->
    <div class="button p-1 w-28 mb-10 bg-[#EB455F] rounded-lg text-center text-white transition ease-in-out delay-150  hover:-translate-1 hover:scale-105 hover:bg-[#D61C4E] duration-100">
        <a href="/">
            <div class="font-medium w-auto m-auto font-just text-xl">
                <span class="py-4">
                    regresar
                </span>
            </div>
        </a>
    </div>


</div>

@endsection
