@extends('layout')
@section('content')

<h1 class="text-center text-2xl">Recompensas</h1>
<br>
<h1 class="text-start text-2xl mx-10">Puntos: 542</h1>
<br>
<h1 class="text-start text-2xl mx-10">Recompensas: Disponibles</h1>
<br>


<!--CONTENIDO DE INFORMACIÓN-->
        <div class="grid grid-cols-4 gap-4">
            <div class="col-span-2">
                <div class="col-span-2">
                    <div class="grid grid-cols-3 gap-3 max-w-sm bg-blue-300 border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                        <div class="col-span-1 p-1.5"><img class="w-24 ml-10" src="img/gas.png"></div>
                        <div class="col-span-2 text-center text-2xl p-1.5">25% de descuento en  cualquier gasolinera de Pemex</div>
                        <div class="col-span-3 text-center p-1.5">
                        <div class="bg-green-600 h-2 w-full"></div>    
                        Necesitas 300 puntos mas para tu siguiente recompensa</div>
                    </div>
                </div>
            </div>
            <div class="col-span-2"><img class="ml-56 w-56" src="img/Exclusive-Benefits.png"></div>
                <div class="col-span-2">
                    <div class="grid grid-cols-3 gap-3 max-w-sm bg-blue-300 border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                        <div class="col-span-1 p-1.5"><img class="w-24 ml-10" src="img/verificacion.png"></div>
                        <div class="col-span-2 text-center text-2xl p-1.5">35% de descuento en su siguiente verificación vehicular</div>
                        <div class="col-span-3 text-center p-1.5">
                        <div class="bg-green-600 h-2 w-full"></div>    
                        Necesitas 300 puntos mas para tu siguiente recompensa</div>
                    </div>
                </div>
            <div class="col-span-2 text-center text-2xl">¡Cada vez que seas un conductor <br> responsable obtendrás puntos <br> y podrás ganar increibles recompensas!</div>
        </div>
        <br>
        <!--CONTENIDO DE INFORMACIÓN
        <div class="col-start-4 col-end-5 max-w-xl bg-blue-300 border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                        <div class="col-start-1 row-start-1 flex-initial w-20 h-20 ml-10" style="background-image:url(/img/gas.png);background-size: 90%; background-position:center;background-repeat: no-repeat;"></div>
                    <div class="col-start-4 row-start-1 text-center  max-w-md text-2xl">25% de descuento en  cualquier gasolinera de Pemex</div>
                    <div class="text-center mr-10">Necesitas 300 puntos mas para tu siguiente recompensa</div>
        </div>
        -->
@endsection