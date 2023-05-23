
@extends('layout')
@section('content')
@auth
    <div class="w-3/4 mx-auto">
<<<<<<< Updated upstream
        @if(isset($post->licencia_frente) && isset($post->licencia_reverso))
=======
        @if(isset($post->imagen))
>>>>>>> Stashed changes
            <p class="text-5xl font-semibold text-[#1E56A0] mx-auto text-center pb-10">Licencia de manejo</p>
            <div class="grid grid-cols-2 ">
                    <table class="col-start-1 mx-auto mt-6 lic mr-10">
                        <thead>
                            <tr>
                                <th>Licencia de manejo (Frente)</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
<<<<<<< Updated upstream
                                <td class="imagen"><img class="object-center mx-auto" src="/img/post/{{$post->licencia_frente}}"></td>
=======
                                <td class="imagen"><img class="object-center mx-auto" src="/img/post/{{$post->imagen}}"></td>
>>>>>>> Stashed changes
                            </tr>
                        </tbody>
                    </table>

                    <table class="col-start-2 mx-auto mt-6 lic">
                        <thead>
                            <tr>
                                <th>Licencia de manejo (Reverso)</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
<<<<<<< Updated upstream
                                <td class="imagen"><img class="object-center mx-auto" src="/img/post/{{$post->licencia_reverso}}"></td>
=======
                                <td class="imagen"><img class="object-center mx-auto" src="/img/imagen-prueba.png"></td>
>>>>>>> Stashed changes
                            </tr>
                        </tbody>
                    </table>
                </div>
        @else
            <div class="w-3/4 mx-auto">

                <form action ="/imagenLicencia" enctype="multipart/form-data" method="POST">
                    @csrf
                    <p class="text-5xl font-semibold text-[#1E56A0] mx-auto w-full pb-20">Ingrese su licencia escaneada</p>
<<<<<<< Updated upstream
                    <div>
                        <input type="text" class="w-52" name="no_licencia_frente" placeholder="Indique caratula: ">
                        <div class="m-8"><input type="file" name="licencia_frente"></div>
                        <input type="text" class="w-52" name="no_licencia_reverso" placeholder="Indique contraportada: ">
                        <div class="m-8"><input type="file" name="licencia_reverso"></div>
                    </div>
=======
                    <input type="text" name="nombre" placeholder="Ingrese nombre: ">
                    <input type="file" name="imagen">
>>>>>>> Stashed changes
                    <button type='submit'>Guardar</button>
                    <hr><hr>
                </form>

            </div>
        @endif
    </div>

    <div class="grid grid-cols-2  grid-rows-2w-3/4 mx-auto">
        <div class="col-start-1 row-start-1 w-3/4 mx-auto text-center pt-20">
            <div class="text-4xl text-[#1E56A0]">Puntaje</div>
            <div class="w-1/2 h-32 mx-auto pt-10"><p class="w-32 h-16 text-2xl m-auto border-2 rounded-xl border-black text-center pt-4">03 pts.</p> </div>
        </div>

        <div class="col-start-2 row-start-1 w-3/4 mx-auto text-center pt-20">
<<<<<<< Updated upstream
            <div class="text-2xl text-[#1E56A0] font-semibold text-center pb-4">¿Como funciona mi puntaje?</div>
=======
            <div class="text-2xl text-[#1E56A0] font-semibold text-center pb-4">¿Cómo funciona mi puntaje?</div>
>>>>>>> Stashed changes
            <div class="text-xl text-black text-justify ">
                El usuario contará con 12 puntos en su licencia de conducir. <br>
                Cada multa tendrá un puntaje designado por falta, cada que el
                usuario cometa una infracción, recibirá la sanción correspondiente
                y se le descontarán puntos de su licencia.

            </div>
        </div>

        <div class="col-start-1 row-start-2 w-3/4 mx-auto text-center pt-20">
<<<<<<< Updated upstream
            <div class="text-2xl text-[#1E56A0] font-semibold text-center pb-4">¿Que pasa si tengo multas?</div>
=======
            <div class="text-2xl text-[#1E56A0] font-semibold text-center pb-4">¿Qué pasa si tengo multas?</div>
>>>>>>> Stashed changes
            <div class="text-xl text-black text-justify ">
            Al momento de realizar el pago de la multa, a esté, se le
            regresará solo la mitad de los puntos; ejemplo: si la multa
            cometida tiene una sanción de 4 puntos, al momento de
            pagarla, se le devolverán 2 puntos.
            </div>
        </div>

        <div class="col-start-2 row-start-2 w-3/4 mx-auto text-center pt-20">
            <div class="text-4xl text-[#1E56A0]"> <img class="w-1/3 h-1/3 m-auto" src="img/iconos_tarjetas/baja.png"></div>
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
    <p class="text-5xl font-semibold text-[#1E56A0] mx-auto text-center pb-10">Licencia de manejo</p>

    <div class="w-full grid grid-cols-9 text-center py-4 border-t-4 border-[#D9D9D9] pt-10">
            <div class="col-start-1 col-span-9 text-2xl font-bold text-[#1E56A0] w-fit mx-auto border-4 rounded-xl border-[#D6E4F0]"><p class="p-4"> Inicie sesión para poder visualizar su licencia de conducir.</p></div>
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
