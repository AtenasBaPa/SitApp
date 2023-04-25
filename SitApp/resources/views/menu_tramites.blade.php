@extends('layout')
@section('content')
<div class="menu ">


    <div class="grid grid-cols-8 gap-8">
              <div class="col-start-3 col-span-1 bg-blue-300 rounded-xl hover:bg-blue-100 transition-all duration-200" style="display:flex">
              <a href="#"><img class="w-56 text-center" src="/img/asistencia.png" style="text-align:center; width: 80%;margin:auto"></a>
              </div>
              <div class="col-span-1 bg-blue-300 rounded-xl hover:bg-blue-100 transition-all duration-200" style="display:flex">
              <a href="#"><img src="/img/documento.png" style="text-align:center; width: 70%; margin:auto"></a>
              </div>
              <div class="col-span-1 bg-blue-300 rounded-xl hover:bg-blue-100 transition-all duration-200" style="display:flex">
              <a href="/eliminar_cuenta"><img class="text-center" src="/img/eliminar.png" style="text-align:center; width: 70%; margin: auto;"></a>
              </div>
              <div class="bg-blue-300 rounded-xl hover:bg-blue-100 transition-all duration-200" style="display:flex">
              <a href="/foto_infraccion"><img src="/img/fotomulta.png" style="text-align:center; width: 70%; margin:auto"></a>
            </div>
          </div>
          <div class="grid grid-cols-8 gap-8 ">
              <div class="col-start-3 col-span-1 text-center">Asistencia
              </div>
              <div class="col-span-1 text-center">Documentacion
              </div>
              <div class="col-span-1 text-center">Eliminar Cuenta
              </div>
              <div class="text-center">Foto Multas
              </div>
          </div>
          <div class="grid grid-cols-8 gap-8">
              <div class="col-start-3 col-span-1 bg-blue-300 rounded-xl hover:bg-blue-100 transition-all duration-200" style="display:flex">
              <a href="/infracciones"><img src="/img/advertencia.png" style="text-align:center; width: 80%; margin:auto"></a>
            </div>
              <div class="col-span-1 bg-blue-300 rounded-xl hover:bg-blue-100 transition-all duration-200" style="display:flex">
              <a href="/licencia"><img class="w-56 text-center" src="/img/licencia.png" style="text-align:center; width: 80%; margin:auto"></a>
            </div>
              <div class="col-span-1 bg-blue-300 rounded-xl hover:bg-blue-100 transition-all duration-200" style="display:flex">
              <a href="/recompensas"><img src="/img/recompensa.png" style="text-align:center; width: 70%;margin:auto"></a>
            </div>
              <div class="bg-blue-300 rounded-xl hover:bg-blue-100 transition-all duration-200" style="display:flex">
              <a href="https://smadsot.puebla.gob.mx/verificacion" target="_blank"><img class="w-56 text-center" src="/img/verificacion.png" style="text-align:center; width: 80%; margin:auto"></a>
            </div>
          </div>
          <div class="grid grid-cols-8 gap-8">
              <div class="col-start-3 col-span-1 text-center">Infracciones
              </div>
              <div class="col-span-1 text-center ">Licencia Digital
              </div>
              <div class="col-span-1 text-center">Recompensas
              </div>
              <div class="text-center">Verificacion
              </div>
          </div>

          <div class="grid grid-cols-9 gap-9">
              <div class="col-start-5 col-span-1 bg-blue-300 rounded-xl hover:bg-blue-100 transition-all duration-200 h-max w-100" style="display:flex">
              <a href="https://rl.puebla.gob.mx/AdeudoVehicular/" target="_blank"><img src="/img/tenencia.png" style="text-align:center; width: 90%; margin-bottom:10px; margin-left:10px"></a>
            </div>
          </div>
          <div class="grid grid-cols-9 gap-9">
              <div class="col-start-5 col-span-1 text-center">
                Tenencia
              </div>
          </div>
 </div>
@endsection
