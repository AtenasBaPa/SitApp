@extends('layout')
@section('content')

<style>
    #seccion_cuenta{
        display: block;
    }

    #seccion_eliminar_cuenta{
        display: none;
    }

    #seguro{
        display: block;
    }
</style>

@auth
    <div class="w-3/4 m-auto">
        <div class="grid grid-cols-6 grid-rows-6 gap-7 mb-20">
            <div class="col-start-2 col-span-4 row-start-1 rounded-lg bg-[#437ECB] flex items-center drop-shadow-2xl justify-center h-20">
                <p class="text-white text-4xl mx-auto">Bienvenido {{ auth()->user()->nombre }}</p>
            </div>

            <div class="col-start-1 row-start-2 bg-[#437ECB] h-16 rounded-lg border-2 drop-shadow-2xl"></div>

            <div class="w-full col-start-1 row-start-3 row-span-4 justify-center bg-[#F2F2F2] drop-shadow-2xl rounded-2xl h-96">
                <div class="w-5/6 mx-auto h-36 mt-8" style="background-image:url(/img/persona.png);background-size: 80%; background-position:center;background-repeat: no-repeat;"></div>
                <button id="info_cuenta" onclick="mostrar_cuenta();">
                    <p class="relative group mx-4 mt-10">
                        <span class="absolute left-0 bottom-0 w-10 border-b-4 rounded-2xl border-[#1E56A0] transition-width duration-500 group-hover:w-40 "></span>
                        <span class="relative border-b-[#1E56A0] text-xl">Cuenta</span>
                    </p>
                </button>

                <button id="eliminar_cuenta" onclick="mostrar_eliminar();">
                    <p class="relative group mx-4 mt-10">
                        <span class="absolute left-0 bottom-0 w-10 border-b-4 rounded-2xl border-[#1E56A0] transition-width duration-500 group-hover:w-40 "></span>
                        <span class="relative border-b-[#1E56A0] text-xl">Eliminar cuenta</span>
                    </p>
                </button>
            </div>

            <div class="col-start-2 col-span-4 row-start-2 row-span-5 rounded-2xl bg-[#F2F2F2] drop-shadow-2xl">
                <div id="seccion_cuenta" class="block">
                    <div class="grid grid-cols-4 grid-rows-6">
                        <div class="col-start-1 col-span-6 row-start-1 flex items-center h-20">
                            <p class="text-center mx-auto text-2xl font-semibold">Datos de perfil</p>
                        </div>

                        <div class="col-start-1 row-start-3 ml-10 w-48">
                            <p class="text-xl text-[#1E56A0]">Nombre de usuario:</p>
                        </div>

                        <div class="col-start-1 row-start-4 ml-10 w-48">
                            <p class="text-xl text-[#1E56A0]">No de licencia: </p>
                        </div>

                        <div class="col-start-2 row-start-3 w-48">
                            <p class="text-xl">{{ auth()->user()->nombre }}</p>
                        </div>

                        <div class="col-start-2 row-start-4 w-48">
                            <p class="text-xl">{{ auth()->user()->licencia }}</p>
                        </div>

                        <div class="col-start-3 row-start-3 ml-10 w-48">
                            <p class="text-xl text-[#1E56A0]">Correo:</p>
                        </div>

                        <div class="col-start-3 row-start-4 ml-10 w-48">
                            <p class="text-xl text-[#1E56A0]">No. tarjeta de circulación: </p>
                        </div>

                        <div class="col-start-4 row-start-3 w-48 -ml-16">
                            <p class="text-xl">{{ auth()->user()->correo}}</p>
                        </div>

                        <div class="col-start-4 row-start-4 w-48">
                            <p class="text-xl">{{ auth()->user()->licencia }}</p>
                        </div>

                        <div class="col-start-1 row-start-5 ml-10 w-48">
                            <p class="text-xl text-[#1E56A0]">Contraseña:</p>
                        </div>

                        <div class="col-start-2 col-span-3 row-start-5 w-48">
                            <p class="text-xl w-52 h-10 pt-2 rounded-xl text-white text-center bg-[#437ECB]">Recuperar Contraseña</p>
                        </div>
                    </div>

                    <div class="button p-1 w-28 mb-4 ml-10 bg-[#EB455F] rounded-lg text-center text-white transition ease-in-out delay-150  hover:-translate-1 hover:scale-105 hover:bg-[#D61C4E] duration-100">
                        <a href="/">
                            <div class="font-medium w-auto m-auto font-just text-xl">
                                <span class="py-4">
                                    Regresar
                                </span>
                            </div>
                        </a>
                    </div>
                </div>

                <div id="seccion_eliminar_cuenta" class="hidden">
                    <div class="grid grid-cols-4 grid-rows-6">
                        <div class="col-start-1 col-span-6 row-start-1 flex items-center h-20">
                            <p class="text-center mx-auto text-4xl font-semibold">Eliminar cuenta</p>
                        </div>

                        <div class="col-start-1 col-span-4 mx-auto">
                            <p class="text-[#FF2D2D] text-2xl">Para eliminar su cuenta de clic en el siguiente botón</p>
                        </div>

                        <label for="btn-modal-eliminar" class="col-start-2 col-span-2 bg-[#FF2D2D] rounded-xl text-2xl text-white font-semibold">
                            <div class="text-center mt-6">
                                Eliminar
                            </div>
                        </label>

                        <a href=""></a>
                    </div>


                    <div class="button p-1 w-28 mb-4 ml-10 bg-[#EB455F] rounded-lg text-center text-white transition ease-in-out delay-150  hover:-translate-1 hover:scale-105 hover:bg-[#D61C4E] duration-100">
                        <a href="/">
                            <div class="font-medium w-auto m-auto font-just text-xl">
                                <span class="py-4">
                                    Regresar
                                </span>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--Ventana Modal1-->
<input type="checkbox" id="btn-modal-eliminar">
    <div class="container-modal-eliminar">
        <div class="content-modal-eliminar">
            <h2 class="text-2xl text-[#1E56A0] font-semibold">¿Seguro?</h2>
            <p class="text-justify">
                La siguiente acción eliminará tu acceso a la cuenta pero
                no borrará los datos en la base de datos.
            </p>


            <div class="grid grid-cols-2">
                <div class="cols-star-1 btn-borrar">
                    <label for="btn-modal-borrar">Eliminar</label>
                </div>

                <div class="btn-eliminar">
                    <label for="btn-modal-eliminar">Cerrar</label>
                </div>
            </div>
        </div>
        <label for="btn-eliminar" class="cerrar-eliminar"></label>
    </div>
<!--Fin de Ventana Modal1-->
@endauth

@endsection


<script>
        function mostrar_cuenta(){
        ocultar_eliminar();
        document.getElementById('seccion_cuenta').style.display = 'block';
    }

    function ocultar_cuenta(){
        document.getElementById('seccion_cuenta').style.display = 'none'; // Cambiado a 'none' en lugar de 'hidden'
    }

    function mostrar_eliminar(){
        ocultar_cuenta();
        document.getElementById('seccion_eliminar_cuenta').style.display = 'block';
    }

    function ocultar_eliminar(){
        document.getElementById('seccion_eliminar_cuenta').style.display = 'none'; // Cambiado a 'none' en lugar de 'hidden'
    }
</script>
