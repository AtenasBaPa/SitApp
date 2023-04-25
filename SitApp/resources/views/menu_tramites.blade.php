@extends('layout')
@section('content')

        <div class="menu">
          
        </div>

        <div class="grid grid-cols-8 gap-8">
            <div class="col-start-3 col-span-1 bg-blue-300 rounded-xl hover:bg-blue-100 transition-all duration-200">
            <img src="/img/advertencia.png" style="text-align:center; width: 80%; margin-left:10px; margin-top:5px">
            </div>
            <div class="col-span-1 bg-blue-300 rounded-xl hover:bg-blue-100 transition-all duration-200">
              <img src="/img/recompensa.png" style="text-align:center; width: 70%; margin-left:20px; margin-top:8px">
            </div>
            <div class="col-span-1 bg-blue-300 rounded-xl hover:bg-blue-100 transition-all duration-200">
            <img src="/img/fotomulta.png" style="text-align:center; width: 80%; margin-left:10px; margin-top:5px">
            </div>
            <div class="bg-blue-300 rounded-xl hover:bg-blue-100 transition-all duration-200">
            <img src="/img/documento.png" style="text-align:center; width: 70%; margin-left:20px; margin-top:5px">
            </div>
        </div>
        <div class="grid grid-cols-8 gap-8 ">
            <div class="col-start-3 col-span-1 text-center">Infracciones
            </div>
            <div class="col-span-1 text-center">Recompensas
            </div>
            <div class="col-span-1 text-center">Foto Multas
            </div>
            <div class="text-center">Documentacion
            </div>
        </div>
        <div class="grid grid-cols-8 gap-8">
            <div class="col-start-3 col-span-1 bg-blue-300 rounded-xl hover:bg-blue-100 transition-all duration-200">
            <img class="w-56 text-center" src="/img/asistencia.png" style="text-align:center; width: 80%; margin-left:10px; margin-top:5px">
            </div>
            <div class="col-span-1 bg-blue-300 rounded-xl hover:bg-blue-100 transition-all duration-200">
              <img class="w-56 text-center" src="/img/licencia.png" style="text-align:center; width: 80%; margin-left:10px; margin-top:10px">
            </div>
            <div class="col-span-1 bg-blue-300 rounded-xl hover:bg-blue-100 transition-all duration-200">
            <img class="w-56 text-center" src="/img/verificacion.png" style="text-align:center; width: 80%; margin-left:10px; margin-top:10px">
            </div>
            <div class="bg-blue-300 rounded-xl hover:bg-blue-100 transition-all duration-200">
            <img src="/img/tenencia.png" style="text-align:center; width: 80%; margin-left:10px;">
            </div>
        </div>
        <div class="grid grid-cols-8 gap-8">
            <div class="col-start-3 col-span-1 text-center">Asistencia
            </div>
            <div class="col-span-1 text-center ">Licencia Digital
            </div>
            <div class="col-span-1 text-center">Verificacion
            </div>
            <div class="text-center">Tenencia
            </div>
        </div>

        <div class="grid grid-cols-9 gap-9">
            <div class="col-start-5 col-span-1 bg-blue-300 rounded-xl hover:bg-blue-100 transition-all duration-200">
            <img class="text-center" src="/img/eliminar.png" style="text-align:center; width: 90%; margin-left:5px; margin-top:10px; margin-bottom:10px">
            </div>
        </div>
        <div class="grid grid-cols-9 gap-9">
            <div class="col-start-5 col-span-1 text-center">
              Eliminar Cuenta
            </div>
        </div>

@endsection