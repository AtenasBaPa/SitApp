@extends('layout')
@section('content')
@auth
    <div class="w-3/4 m-auto">
        <div class="w-1/2 mx-auto text-center font-semibold text-[#1E56A0]">
            <p class="text-4xl">Documentación</p>
        </div>
        <div id="body">

            <div class="subapartado rounded-xl">

                <div class="titulo">
                    <p class="titulo">Licencia (Frente)</p>
                </div>

                <div class="info">
<<<<<<< Updated upstream
                    <div class="w-1/2 h-64 pt-auto mx-auto mt-8" ><img class="object-center mx-auto" src="/img/post/frente.jpg"></div>
=======
                    <div class="w-1/2 h-64 pt-auto mx-auto mt-8" style="background-image:url(/img/post/licencia-eduardo.jpg);background-size: 100%; background-position:center;background-repeat: no-repeat;"></div>
>>>>>>> Stashed changes
                </div>

            </div>

            <div class="subapartado rounded-xl">

                <div class="titulo">
                    <p class="titulo">Licencia (Reverso)</p>
                </div>

                <div class="info">
<<<<<<< Updated upstream
                    <div class="w-1/2 h-64 pt-auto mx-auto mt-8"><img class="object-center mx-auto" src="/img/post/reverso.jpg"></div>
=======
                    <div class="w-1/2 h-64 pt-auto mx-auto mt-8" style="background-image:url(/img/imagen-prueba.png);background-size: 90%; background-position:center;background-repeat: no-repeat;"></div>
>>>>>>> Stashed changes
                </div>

            </div>

            <div class="subapartado rounded-xl">

                <div class="titulo">
                    <p class="titulo">Tarjeta de circulación (Frente)</p>
                </div>

                <div class="info">
                    <div class="w-1/2 h-64 pt-auto mx-auto mt-8" style="background-image:url(/img/documentos/cir1.jpg);background-size: 90%; background-position:center;background-repeat: no-repeat;"></div>
                </div>

            </div>

            <div class="subapartado rounded-xl">

                <div class="titulo">
                    <p class="titulo">Tarjeta de circulación (Reverso)</p>
                </div>

                <div class="info">
                    <div class="w-1/2 h-64 pt-auto mx-auto mt-8" style="background-image:url(/img/documentos/cir2.png);background-size: 90%; background-position:center;background-repeat: no-repeat;"></div>
                </div>

            </div>

            <div class="subapartado rounded-xl">

                <div class="titulo">
                    <p class="titulo">Placa del vehículo</p>
                </div>

                <div class="info">
                    <div class="w-1/2 h-64 pt-auto mx-auto mt-8" style="background-image:url(/img/documentos/placa.jpg);background-size: 90%; background-position:center;background-repeat: no-repeat;"></div>
                </div>

            </div>

        </div>
    </div>

    <!--División de botón de regreso-->
    <div class="h-28"></div>
    <div class="w-3/4 mx-auto">
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
<div class="w-3/4 mx-auto">
    <p class="text-5xl font-semibold text-[#1E56A0] mx-auto text-center pb-10">Documentos</p>

    <div class="w-full grid grid-cols-9 text-center py-4 border-t-4 border-[#D9D9D9] pt-10">
            <div class="col-start-1 col-span-9 text-2xl font-bold text-[#1E56A0] w-fit mx-auto border-4 rounded-xl border-[#D6E4F0]"><p class="p-4"> Inicie sesión para ver sus documentos.</p></div>
    </div>
</div>

    <!--División de botón de regreso-->
    <div class="h-28"></div>
    <div class="w-3/4 mx-auto">
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
