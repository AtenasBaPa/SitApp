@extends('layout')
@section('content')
    <div class="grid grid-cols-4 grid-rows-4 gap-6 w-6/12 m-auto alto-cont overflow-hidden">
            <div class="col-start-1 row-start-1 bg-[#D6E4F0] mx-auto rounded-3xl w-52 h-52 hover:bg-[#F6F6F6] transition-all duration-200 border-2" style="display:flex">
                <a href="" class="m-auto"><img class="w-56 text-center m-auto" src="/img/asistencia.png" style="text-align:center; width: 80%;margin:auto"></a>
            </div>
            <p class="col-start-1 row-start-2 text-center text-2xl font-bold alto-malla">
                Asistencia
            </p>
            <div class="col-start-2 row-start-1 bg-[#D6E4F0] mx-auto rounded-3xl w-52 h-52 hover:bg-[#F6F6F6] transition-all duration-200" style="display:flex">
                <a href="#" class="m-auto"><img class="w-56 text-center m-auto" src="/img/documento.png" style="text-align:center; width: 80%;margin:auto"></a>
            </div>
            <p class="col-start-2 row-start-2 text-center text-2xl alto-malla font-bold">
                Documentación
            </p>
            <div class="col-start-3 row-start-1 bg-[#D6E4F0] mx-auto rounded-3xl w-52 h-52 hover:bg-[#F6F6F6] transition-all duration-200" style="display:flex">
                <a href="/foto_infraccion" class="m-auto"><img class="w-56 text-center m-auto" src="/img/fotomulta.png" style="text-align:center; width: 80%;margin:auto"></a>
            </div>
            <p class="col-start-3 row-start-2 text-center text-2xl font-bold alto-malla">
                Foto multa
            </p>
            <div class="col-start-4 row-start-1 bg-[#D6E4F0] mx-auto rounded-3xl w-52 h-52 hover:bg-[#F6F6F6] transition-all duration-200" style="display:flex">
                <a href="/infracciones" class="m-auto"><img class="w-56 text-center m-auto" src="/img/advertencia.png" style="text-align:center; width: 80%;margin:auto"></a>
            </div>
            <p class="col-start-4 row-start-2 text-center text-2xl font-bold alto-malla">
                Infracciones
            </p>
            <div class="col-start-1 row-start-3 bg-[#D6E4F0] mx-auto rounded-3xl w-52 h-52 -mt-5 hover:bg-[#F6F6F6] transition-all duration-200" style="display:flex">
                <a href="/licencia" class="m-auto"><img class="w-56 text-center m-auto" src="/img/licencia.png" style="text-align:center; width: 80%;margin:auto"></a>
            </div>
            <p class="col-start-1 row-start-4 text-center text-2xl font-bold alto-malla2">
                Licencia Digital
            </p>
            <div class="col-start-2 row-start-3 bg-[#D6E4F0] mx-auto rounded-3xl w-52 h-52 -mt-5 hover:bg-[#F6F6F6] transition-all duration-200" style="display:flex">
                <a href="/recompensas" class="m-auto"><img class="w-56 text-center m-auto" src="/img/recompensa.png" style="text-align:center; width: 80%;margin:auto"></a>
            </div>
            <p class="col-start-2 row-start-4 text-center text-2xl font-bold alto-malla2">
                Recompensas
            </p>
            <div class="col-start-3 row-start-3 bg-[#D6E4F0] mx-auto rounded-3xl w-52 h-52 -mt-5 hover:bg-[#F6F6F6] transition-all duration-200" style="display:flex">
                <a href="https://rl.puebla.gob.mx/Servicios/Tenencia" class="m-auto"><img class="w-56 text-center m-auto" src="/img/tenencia.png" style="text-align:center; width: 80%;margin:auto"></a>
            </div>
            <p class="col-start-3 row-start-4 text-center text-2xl font-bold alto-malla2">
                Tenencia
            </p>
            <div class="col-start-4 row-start-3 bg-[#D6E4F0] mx-auto rounded-3xl w-52 h-52 -mt-5 hover:bg-[#F6F6F6] transition-all duration-200" style="display:flex">
                <a href="https://smadsot.puebla.gob.mx/verificacion" class="m-auto"><img class="w-56 text-center m-auto" src="/img/gas.png" style="text-align:center; width: 80%;margin:auto"></a>
            </div>
            <p class="col-start-4 row-start-4 text-center text-2xl font-bold alto-malla2">
                Verificación
            </p>
    </div>

@endsection
