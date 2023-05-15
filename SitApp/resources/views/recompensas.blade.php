@extends('layout')
@section('content')


<h1 class="text-center text-4xl font-bold text-[#1E56A0]">Recompensas</h1>

<div class="w-4/5 m-auto py-10">
<h1 class="text-start text-2xl mx-10">Puntos: 542</h1>
<br>
<h1 class="text-start text-2xl mx-10">Recompensas: Disponibles</h1>
<br>

<!--CONTENIDO DE INFORMACIÓN-->
        <div class="grid grid-cols-8 grid-rows-3 gap-4 mt-10">
            <div class="col-start-1 col-span-3 row-start-1 mx-auto drop-shadow-xl">
                <div class="col-span-2">
                    <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                        <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/licencia-de-conducir.png"></div>
                        <div class="col-span-2 text-center text-xl m-auto">25% de descuentos en la renovación de la licencia de conducir </div>
                        <div class="col-span-3 text-center p-1.5">
                        <div class="h-2 w-full" style="border:2px solid"><div class="bg-[#1E56A0] h-1 w-2/4"></div></div>
                        Necesitas 300 puntos mas para tu siguiente recompensa</div>
                    </div>
                </div>
            </div>

            <div class="col-start-1 col-span-3 row-start-2 mx-auto drop-shadow-xl">
                <div class="col-span-2">
                    <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                        <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/coche-estacionado.png"></div>
                        <div class="col-span-2 text-center text-xl m-auto">50% off en estacionamiento centro comercial Angelópolis</div>
                        <div class="col-span-3 text-center p-1.5">
                            <div class="h-2 w-full" style="border:2px solid">
                                <div class="bg-[#1E56A0] h-1 mr-10"></div>
                            </div>
                            Necesitas 300 puntos mas para tu siguiente recompensa
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-start-1 col-span-3 row-start-3 mx-auto drop-shadow-xl">
                <div class="col-span-2">
                    <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                        <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/guardia.png"></div>
                        <div class="col-span-2 text-center text-xl m-auto">30% de descuento en cualquier caseta del país</div>
                        <div class="col-span-3 text-center p-1.5">
                            <div class="h-2 w-full" style="border:2px solid">
                                <div class="bg-[#1E56A0] h-1 mr-10"></div>
                            </div>
                            Necesitas 300 puntos mas para tu siguiente recompensa
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-start-4 col-span-2 row-start-2 h-52" style="background-image:url(/img/Exclusive-Benefits.png); background-size: 50%; background-position:center;background-repeat: no-repeat;"></div>
            <div class="col-start-4 col-span-2 row-start-3 text-center text-2xl">¡Cada vez que seas un conductor responsable obtendrás puntos y podrás ganar increibles recompensas!</div>

            <div class="col-start-6 col-span-3 row-start-1 mx-auto drop-shadow-xl">
                <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                    <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/uber.png"></div>
                    <div class="col-span-2 text-center text-xl p-1.5 m-auto">40% de descuento en próximo viaje de Uber</div>
                    <div class="col-span-3 text-center p-1.5">
                        <div class="h-2 w-full" style="border:2px solid">
                            <div class="bg-[#1E56A0] h-1 mr-20"></div>
                        </div>
                        Necesitas 350 puntos mas para tu siguiente recompensa
                    </div>
                </div>
            </div>

            <div class="col-start-6 col-span-3 row-start-2 mx-auto drop-shadow-xl">
                <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                    <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/cine.png"></div>
                    <div class="col-span-2 text-center text-xl m-auto">2x1 Boletos Cinépolis 2x1</div>
                    <div class="col-span-3 text-center p-1.5">
                        <div class="h-2 w-full" style="border:2px solid">
                            <div class="bg-[#1E56A0] h-1 mr-20"></div>
                        </div>
                        Necesitas 350 puntos mas para tu siguiente recompensa
                    </div>
                </div>
            </div>

            <div class="col-start-6 col-span-3 row-start-3 mx-auto drop-shadow-xl">
                <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                    <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/mantenimiento.png"></div>
                    <div class="col-span-2 text-center text-xl m-auto">20% de descuento en servicios de mantenimiento de vehículos “cambio de aceite o ajuste de frenos”</div>
                    <div class="col-span-3 text-center p-1.5">
                        <div class="h-2 w-full" style="border:2px solid">
                            <div class="bg-[#1E56A0] h-1 mr-20"></div>
                        </div>
                        Necesitas 350 puntos mas para tu siguiente recompensa
                    </div>
                </div>
            </div>

        </div>
        <br>
</div>


@endsection
