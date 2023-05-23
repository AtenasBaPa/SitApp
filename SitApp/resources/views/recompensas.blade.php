@extends('layout')
@section('content')

@auth
    <h1 class="text-center text-4xl font-bold text-[#1E56A0]">Recompensas</h1>

    <div class="w-4/5 m-auto py-10">
        <h1 class="text-start text-2xl mx-10">Puntos: 542</h1>
        <br>
        <h1 class="text-start text-2xl mx-10">Recompensas: Disponibles</h1>
        <br>
<<<<<<< Updated upstream
@endauth

@guest
    <h1 class="text-center text-4xl font-bold text-[#1E56A0]">Recompensas</h1>

    <div class="w-4/5 m-auto py-10">
        <h1 class="text-start text-2xl mx-10">Puntos: 000</h1>
        <br>
        <h1 class="text-start text-2xl mx-10">Recompensas: No Disponibles</h1>
        <br>
@endguest


    <!--CONTENIDO DE INFORMACIÓN-->
=======

        <!--CONTENIDO DE INFORMACIÓN-->
>>>>>>> Stashed changes
        <div class="grid grid-cols-8 grid-rows-3 gap-4 mt-10 pb-32">
            <label for="btn-modal-recompensas" class="col-start-1 col-span-3 row-start-1 mx-auto drop-shadow-xl">
                <div class="col-span-2">
                    <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                        <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/tenencia.png"></div>
                        <div class="col-span-2 text-center text-xl m-auto">Descuentos en el pago de la tenencia vehicular</div>
                        <div class="col-span-3 text-center p-1.5">
                        <div class="h-2 w-full" style="border:2px solid"><div class="bg-[#1E56A0] h-1 w-2/4"></div></div>
                        Necesitas 000 puntos mas para tu siguiente recompensa</div>
                    </div>
                </div>
            </label>

            <label for="btn-modal-recompensas" class="col-start-1 col-span-3 row-start-2 mx-auto drop-shadow-xl">
                <div class="col-span-2">
                    <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                        <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/verificacion.png"></div>
                        <div class="col-span-2 text-center text-xl m-auto">Descuentos en el pago de la verificación vehicular</div>
                        <div class="col-span-3 text-center p-1.5">
                        <div class="h-2 w-full" style="border:2px solid"><div class="bg-[#1E56A0] h-1 w-2/4"></div></div>
                            Necesitas 000 puntos mas para tu siguiente recompensa
                        </div>
                    </div>
                </div>
            </label>

            <label for="btn-modal-recompensas" class="col-start-1 col-span-3 row-start-3 mx-auto drop-shadow-xl">
                <div class="col-span-2">
                    <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                        <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/licencia.png"></div>
                        <div class="col-span-2 text-center text-xl m-auto">Descuentos en la renovación, actualización o reposición de la licencia de conducir </div>
                        <div class="col-span-3 text-center p-1.5">
                        <div class="h-2 w-full" style="border:2px solid"><div class="bg-[#1E56A0] h-1 w-2/4"></div></div>
                            Necesitas 000 puntos mas para tu siguiente recompensa
                        </div>
                    </div>
                </div>
            </label>

            <label for="btn-modal-recompensas" class="col-start-1 col-span-3 row-start-4 mx-auto drop-shadow-xl">
                <div class="col-span-2">
                    <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                        <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/coche-estacionado.png"></div>
                        <div class="col-span-2 text-center text-xl m-auto">Descuento del 30% en estacionamiento seleccionados</div>
                        <div class="col-span-3 text-center p-1.5">
                        <div class="h-2 w-full" style="border:2px solid"><div class="bg-[#1E56A0] h-1 w-2/4"></div></div>
                            Necesitas 000 puntos mas para tu siguiente recompensa
                        </div>
                    </div>
                </div>
            </label>

            <label for="btn-modal-recompensas" class="col-start-1 col-span-3 row-start-5 mx-auto drop-shadow-xl">
                <div class="col-span-2">
                    <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                        <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/cine.png"></div>
                        <div class="col-span-2 text-center text-xl m-auto">Boletos en Cinépolis 2x1 (500 puntos) </div>
                        <div class="col-span-3 text-center p-1.5">
                        <div class="h-2 w-full" style="border:2px solid"><div class="bg-[#1E56A0] h-1 w-2/4"></div></div>
                            Necesitas 000 puntos mas para tu siguiente recompensa
                        </div>
                    </div>
                </div>
            </label>

            <div class="col-start-4 col-span-2 row-start-3 h-52" style="background-image:url(/img/Exclusive-Benefits.png); background-size: 50%; background-position:center;background-repeat: no-repeat;"></div>
            <div class="col-start-4 col-span-2 row-start-4 text-center text-2xl">¡Cada vez que seas un conductor responsable obtendrás puntos y podrás ganar increíbles recompensas!</div>

            <label for="btn-modal-recompensas" class="col-start-6 col-span-3 row-start-1 mx-auto drop-shadow-xl">
                <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                    <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/montana-rusa.png"></div>
                    <div class="col-span-2 text-center text-xl p-1.5 m-auto">Descuento del 60% en parques temáticos, atracciones turísticas o museos</div>
                    <div class="col-span-3 text-center p-1.5">
                        <div class="h-2 w-full" style="border:2px solid">
                            <div class="bg-[#1E56A0] h-1 mr-20"></div>
                        </div>
                        Necesitas 000 puntos mas para tu siguiente recompensa
                    </div>
                </div>
            </label>

            <label for="btn-modal-recompensas" class="col-start-6 col-span-3 row-start-2 mx-auto drop-shadow-xl">
                <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                    <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/mantenimiento.png"></div>
                    <div class="col-span-2 text-center text-xl m-auto">Certificado de descuento del 30% en servicios de mantenimiento vehicular</div>
                    <div class="col-span-3 text-center p-1.5">
                        <div class="h-2 w-full" style="border:2px solid">
                            <div class="bg-[#1E56A0] h-1 mr-20"></div>
                        </div>
                        Necesitas 000 puntos mas para tu siguiente recompensa
                    </div>
                </div>
            </label>

            <label for="btn-modal-recompensas" class="col-start-6 col-span-3 row-start-3 mx-auto drop-shadow-xl">
                <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                    <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/gas.png"></div>
                    <div class="col-span-2 text-center text-xl m-auto">Descuento 35% en combustible</div>
                    <div class="col-span-3 text-center p-1.5">
                        <div class="h-2 w-full" style="border:2px solid">
                            <div class="bg-[#1E56A0] h-1 mr-20"></div>
                        </div>
                        Necesitas 000 puntos mas para tu siguiente recompensa
                    </div>
                </div>
            </label>

            <label for="btn-modal-recompensas" class="col-start-6 col-span-3 row-start-4 mx-auto drop-shadow-xl">
                <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                    <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/seguro-de-auto.png"></div>
                    <div class="col-span-2 text-center text-xl m-auto">Descuento del 15% en seguros de auto”</div>
                    <div class="col-span-3 text-center p-1.5">
                        <div class="h-2 w-full" style="border:2px solid">
                            <div class="bg-[#1E56A0] h-1 mr-20"></div>
                        </div>
                        Necesitas 000 puntos mas para tu siguiente recompensa
                    </div>
                </div>
            </label>

            <label for="btn-modal-recompensas" class="col-start-6 col-span-3 row-start-5 mx-auto drop-shadow-xl">
                <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                    <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/ambulancia.png"></div>
                    <div class="col-span-2 text-center text-xl m-auto">Servicios de asistencia en carretera gratuítos</div>
                    <div class="col-span-3 text-center p-1.5">
                        <div class="h-2 w-full" style="border:2px solid">
                            <div class="bg-[#1E56A0] h-1 mr-20"></div>
                        </div>
                        Necesitas 000 puntos mas para tu siguiente recompensa
                    </div>
                </div>
            </label>

            <label for="btn-modal-recompensas" class="col-start-3 col-span-4 row-start-6 mx-auto drop-shadow-xl">
                <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                    <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/examen-de-conduccion.png"></div>
                    <div class="col-span-2 text-center text-xl m-auto">Descuento del 30% en cursos de manejo avanzado</div>
                    <div class="col-span-3 text-center p-1.5">
                        <div class="h-2 w-full" style="border:2px solid">
                            <div class="bg-[#1E56A0] h-1 mr-20"></div>
                        </div>
                        Necesitas 000 puntos mas para tu siguiente recompensa
                    </div>
                </div>
            </label>

        </div>
@endauth

@guest
    <h1 class="text-center text-4xl font-bold text-[#1E56A0]">Recompensas</h1>

    <div class="w-4/5 m-auto py-10">
        <h1 class="text-start text-2xl mx-10">Puntos: 000</h1>
        <br>
        <h1 class="text-start text-2xl mx-10">Recompensas: No Disponibles</h1>
        <br>

        <!--CONTENIDO DE INFORMACIÓN-->
        <div class="grid grid-cols-8 grid-rows-3 gap-4 mt-10 pb-32">
            <label class="col-start-1 col-span-3 row-start-1 mx-auto drop-shadow-xl">
                <div class="col-span-2">
                    <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                        <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/tenencia.png"></div>
                        <div class="col-span-2 text-center text-xl m-auto">Descuentos en el pago de la tenencia vehicular</div>
                        <div class="col-span-3 text-center p-1.5">
                        Necesitas ??? puntos mas para tu siguiente recompensa</div>
                    </div>
                </div>
            </label>

            <label class="col-start-1 col-span-3 row-start-2 mx-auto drop-shadow-xl">
                <div class="col-span-2">
                    <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                        <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/verificacion.png"></div>
                        <div class="col-span-2 text-center text-xl m-auto">Descuentos en el pago de la verificación vehicular</div>
                        <div class="col-span-3 text-center p-1.5">
                            Necesitas ??? puntos mas para tu siguiente recompensa
                        </div>
                    </div>
                </div>
            </label>

            <label class="col-start-1 col-span-3 row-start-3 mx-auto drop-shadow-xl">
                <div class="col-span-2">
                    <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                        <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/licencia.png"></div>
                        <div class="col-span-2 text-center text-xl m-auto">Descuentos en la renovación, actualización o reposición de la licencia de conducir </div>
                        <div class="col-span-3 text-center p-1.5">
                            Necesitas ??? puntos mas para tu siguiente recompensa
                        </div>
                    </div>
                </div>
            </label>

            <label class="col-start-1 col-span-3 row-start-4 mx-auto drop-shadow-xl">
                <div class="col-span-2">
                    <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                        <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/coche-estacionado.png"></div>
                        <div class="col-span-2 text-center text-xl m-auto">Descuento del 30% en estacionamiento seleccionados</div>
                        <div class="col-span-3 text-center p-1.5">
                            Necesitas ??? puntos mas para tu siguiente recompensa
                        </div>
                    </div>
                </div>
            </label>

            <label class="col-start-1 col-span-3 row-start-5 mx-auto drop-shadow-xl">
                <div class="col-span-2">
                    <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                        <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/cine.png"></div>
                        <div class="col-span-2 text-center text-xl m-auto">Boletos en Cinépolis 2x1 (500 puntos) </div>
                        <div class="col-span-3 text-center p-1.5">
                            Necesitas ??? puntos mas para tu siguiente recompensa
                        </div>
                    </div>
                </div>
            </label>

            <div class="col-start-4 col-span-2 row-start-3 h-52" style="background-image:url(/img/Exclusive-Benefits.png); background-size: 50%; background-position:center;background-repeat: no-repeat;"></div>
            <div class="col-start-4 col-span-2 row-start-4 text-center text-2xl">¡Cada vez que seas un conductor responsable obtendrás puntos y podrás ganar increibles recompensas!</div>

            <label class="col-start-6 col-span-3 row-start-1 mx-auto drop-shadow-xl">
                <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                    <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/montana-rusa.png"></div>
                    <div class="col-span-2 text-center text-xl p-1.5 m-auto">Descuento del 60% en parques temáticos, atracciones turísticas o museos</div>
                    <div class="col-span-3 text-center p-1.5">
                        Necesitas ??? puntos mas para tu siguiente recompensa
                    </div>
                </div>
            </label>

            <label class="col-start-6 col-span-3 row-start-2 mx-auto drop-shadow-xl">
                <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                    <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/mantenimiento.png"></div>
                    <div class="col-span-2 text-center text-xl m-auto">Certificado de descuento del 30% en servicios de mantenimiento vehicular</div>
                    <div class="col-span-3 text-center p-1.5">
                        Necesitas ??? puntos mas para tu siguiente recompensa
                    </div>
                </div>
            </label>

            <label class="col-start-6 col-span-3 row-start-3 mx-auto drop-shadow-xl">
                <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                    <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/gas.png"></div>
                    <div class="col-span-2 text-center text-xl m-auto">Descuento 35% en combustible</div>
                    <div class="col-span-3 text-center p-1.5">
                        Necesitas ??? puntos mas para tu siguiente recompensa
                    </div>
                </div>
            </label>

            <label class="col-start-6 col-span-3 row-start-4 mx-auto drop-shadow-xl">
                <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                    <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/seguro-de-auto.png"></div>
                    <div class="col-span-2 text-center text-xl m-auto">Descuento del 15% en seguros de auto”</div>
                    <div class="col-span-3 text-center p-1.5">
                        Necesitas ??? puntos mas para tu siguiente recompensa
                    </div>
                </div>
            </label>

            <label class="col-start-6 col-span-3 row-start-5 mx-auto drop-shadow-xl">
                <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                    <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/ambulancia.png"></div>
                    <div class="col-span-2 text-center text-xl m-auto">Servicios de asistencia en carretera gratuitos</div>
                    <div class="col-span-3 text-center p-1.5">
                        Necesitas ??? puntos mas para tu siguiente recompensa
                    </div>
                </div>
            </label>

            <label class="col-start-3 col-span-4 row-start-6 mx-auto drop-shadow-xl">
                <div class="grid grid-cols-3 gap-3 max-w-sm bg-[#F6F6F6] border-white rounded-3xl hover:bg-blue-100 transition-all duration-200 mx-10 mr-10">
                    <div class="col-span-1 p-1.5"><img class="w-24 m-auto" src="img/iconos_tarjetas/examen-de-conduccion.png"></div>
                    <div class="col-span-2 text-center text-xl m-auto">Descuento del 30% en cursos de manejo avanzado</div>
                    <div class="col-span-3 text-center p-1.5">
                        Necesitas ??? puntos mas para tu siguiente recompensa
                    </div>
                </div>
            </label>

        </div>
@endguest

        <br>

        <h1 class="text-center text-4xl font-bold text-[#1E56A0] pb-10">Descuentos</h1>

        <div class="grid grid-cols-3 gap-10 mx-auto">

            <div class="col-start-1">

                <div class="text-2xl row-start-1 flex items-center justify-center text-center h-44 font-bold pb-6 transition-colors duration-500 hover:text-[#1E56A0]">
                    <p>
                        Descuentos en la renovación, actualización o reposición de la licencia de conducir
                    </p>
                </div>

                <div class="text-lg row-start-2 flex items-center justify-center text-center h-28">
                    Canjea puntos de recompensa para obtener un descuento en trámites relacionados con la licencia de conducir
                </div>

                <div class="row-start-3 row-span-3">
                    <table class="mx-auto mt-6">
                        <thead>
                            <tr>
                                <th>Puntos</th>
                                <th>Descuento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>400</td>
                                <td>10%</td>
                            </tr>
                            <tr>
                                <td>800</td>
                                <td>20%</td>
                            </tr>
                            <tr>
                                <td>1200</td>
                                <td>30%</td>
                            </tr>
                            <tr>
                                <td>1600</td>
                                <td>40%</td>
                            </tr>
                            <tr>
                                <td>2000</td>
                                <td>50%</td>
                            </tr>
                            <tr>
                                <td>2400</td>
                                <td>60%</td>
                            </tr>
                            <tr>
                                <td>2800</td>
                                <td>70%</td>
                            </tr>
                            <tr>
                                <td>3200</td>
                                <td>80%</td>
                            </tr>
                            <tr>
                                <td>3600</td>
                                <td>90%</td>
                            </tr>
                            <tr>
                                <td>4000</td>
                                <td>100%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-start-2">

                <div class="row-start-1 text-2xl flex items-center justify-center text-center h-44 font-bold transition-colors duration-500 hover:text-[#1E56A0]">
                    Descuentos en el pago de la verificación vehicular
                </div>

                <div class="row-start-2 flex items-center justify-center text-center h-28">
                    <p class="my-auto text-center">
                        Canjea puntos de recompensa para obtener un descuento en el monto a pagar por la verificación vehicular
                    </p>

                </div>

                <div class="row-start-3 row-span-3 ">
                    <table class="mx-auto mt-6">
                        <thead>
                            <tr>
                                <th>Puntos</th>
                                <th>Descuento</th>
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                    <td>300</td>
                                    <td>10%</td>
                                </tr>
                                <tr>
                                    <td>600</td>
                                    <td>20%</td>
                                </tr>
                                <tr>
                                    <td>900</td>
                                    <td>30%</td>
                                </tr>
                                <tr>
                                    <td>1200</td>
                                    <td>40%</td>
                                </tr>
                                <tr>
                                    <td>1500</td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td>1800</td>
                                    <td>60%</td>
                                </tr>
                                <tr>
                                    <td>2100</td>
                                    <td>70%</td>
                                </tr>
                                <tr>
                                    <td>2400</td>
                                    <td>80%</td>
                                </tr>
                                <tr>
                                    <td>2700</td>
                                    <td>90%</td>
                                </tr>
                                <tr>
                                    <td>3000</td>
                                    <td>100%</td>
                                </tr>
                            </tbody>
                    </table>
                </div>

            </div>

            <div class="col-start-3">

                <div class="row-start-1 text-2xl font-bold flex items-center justify-center text-center h-44 transition-colors duration-500 hover:text-[#1E56A0]">
                    Descuentos en el pago de la tenencia vehicular
                </div>
                <div class="row-start-2 flex items-center justify-center text-center h-28">
                    Canjea puntos de recompensa para obtener un descuento en el monto a pagar por la tenencia vehicular
                </div>

                <div class="row-start-3 row-span-3">
                    <table class="mx-auto mt-6">
                        <thead>
                            <tr>
                                <th>Puntos</th>
                                <th>Descuento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>100</td>
                                <td>10%</td>
                            </tr>
                            <tr>
                                <td>200</td>
                                <td>20%</td>
                            </tr>
                            <tr>
                                <td>300</td>
                                <td>30%</td>
                            </tr>
                            <tr>
                                <td>400</td>
                                <td>40%</td>
                            </tr>
                            <tr>
                                <td>500</td>
                                <td>50%</td>
                            </tr>
                            <tr>
                                <td>600</td>
                                <td>60%</td>
                            </tr>
                            <tr>
                                <td>700</td>
                                <td>70%</td>
                            </tr>
                            <tr>
                                <td>800</td>
                                <td>80%</td>
                            </tr>
                            <tr>
                                <td>900</td>
                                <td>90%</td>
                            </tr>
                            <tr>
                                <td>1000</td>
                                <td>100%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <h1 class="col-start-1 text-center text-4xl font-bold text-[#1E56A0] py-28">Otros Descuentos </h1>
    <div class="grid grid-cols-2 grid-rows-4 gap-9 justify-items-center pb-10">

            <div class="col-start-1 row-start-1 alto-tarjeta-r w-96 rounded-3xl bg-[#F6F6F6] drop-shadow-xl">
                <div class="w-full h-44 text-5xl text-[#1E56A0]" style="background-image:url(/img/iconos_tarjetas/coche-estacionado.png); background-size: 40%; background-position:center;background-repeat: no-repeat;"></div>
                <div class="w-10/12 m-6 text-xl text-[#1E56A0] font-bold"><p>Descuento del 30% en estacionamiento seleccionados (400 puntos)</p></div>
                <div class="w-10/12 m-6 text-md font-semibold"><p>Canjea puntos de recompensa como forma de pago para estacionamientos seleccionados.</p></div>
            </div>

            <div class="col-start-2 row-start-1 alto-tarjeta-r w-96 rounded-3xl bg-[#F6F6F6] drop-shadow-xl">
                <div class="w-full h-44 text-5xl text-[#1E56A0]" style="background-image:url(/img/iconos_tarjetas/cine.png); background-size: 40%; background-position:center;background-repeat: no-repeat;"></div>
                <div class="w-10/12 m-6 text-xl text-[#1E56A0] font-bold"><p>Boletos en Cinépolis 2x1 (500 puntos) </p></div>
                <div class="w-10/12 m-6 text-md font-semibold"><p>Canjea puntos de recompensa para boletos 2x1 en salas tradicional y VIP.</p></div>
            </div>

            <div class="col-start-1 row-start-2 alto-tarjeta-r w-96 rounded-3xl bg-[#F6F6F6] drop-shadow-xl">
                <div class="w-full h-44 text-5xl text-[#1E56A0]" style="background-image:url(/img/iconos_tarjetas/montana-rusa.png); background-size: 40%; background-position:center;background-repeat: no-repeat;"></div>
                <div class="w-10/12 m-6 text-xl text-[#1E56A0] font-bold"><p>Descuento del 60% en parques temáticos, atracciones turísticas o museos (600 puntos) </p></div>
                <div class="w-10/12 m-6 text-md font-semibold"><p>Canjea puntos de recompensa para obtener descuentos en las entradas a parques temáticos, atracciones turísticas o museos dentro del estado de Puebla .</p></div>
            </div>

            <div class="col-start-2 row-start-2 alto-tarjeta-r w-96 rounded-3xl bg-[#F6F6F6] drop-shadow-xl">
                <div class="w-full h-44 text-5xl text-[#1E56A0]" style="background-image:url(/img/iconos_tarjetas/mantenimiento.png); background-size: 40%; background-position:center;background-repeat: no-repeat;"></div>
                <div class="w-10/12 m-6 text-xl text-[#1E56A0] font-bold"><p>Certificado de descuento del 30% en servicios de mantenimiento vehicular (1000 puntos) </p></div>
                <div class="w-10/12 m-6 text-md font-semibold"><p>Canjea puntos de recompensa por certificados que cubran servicios de cambio de aceite, revisión técnica u otros servicios de mantenimiento en centros participantes .</p></div>
            </div>

            <div class="col-start-1 row-start-3 alto-tarjeta-r w-96 rounded-3xl bg-[#F6F6F6] drop-shadow-xl">
                <div class="w-full h-44 text-5xl text-[#1E56A0]" style="background-image:url(/img/iconos_tarjetas/gas.png); background-size: 40%; background-position:center;background-repeat: no-repeat;"></div>
                <div class="w-10/12 m-6 text-xl text-[#1E56A0] font-bold"><p>Descuento 35% en combustible (??? puntos)</p></div>
                <div class="w-10/12 m-6 text-md font-semibold"><p>Canjea puntos de recompensa por vales de combustible que puedan utilizarse en estaciones de servicio participantes (Pemex,Mobil,Gulf).</p></div>
            </div>

            <div class="col-start-2 row-start-3 alto-tarjeta-r w-96 rounded-3xl bg-[#F6F6F6] drop-shadow-xl">
                <div class="w-full h-44 text-5xl text-[#1E56A0]" style="background-image:url(/img/iconos_tarjetas/seguro-de-auto.png); background-size: 40%; background-position:center;background-repeat: no-repeat;"></div>
                <div class="w-10/12 m-6 text-xl text-[#1E56A0] font-bold"><p>Descuento del 15% en seguros de auto (1500 puntos) </p></div>
                <div class="w-10/12 m-6 text-md font-semibold"><p>Canjea puntos de recompensa para obtener descuentos en las primas de seguros de auto.</p></div>
            </div>

            <div class="col-start-1 row-start-4 alto-tarjeta-r w-96 rounded-3xl bg-[#F6F6F6] drop-shadow-xl">
                <div class="w-full h-44 text-5xl text-[#1E56A0]" style="background-image:url(/img/iconos_tarjetas/ambulancia.png); background-size: 40%; background-position:center;background-repeat: no-repeat;"></div>
                <div class="w-10/12 m-6 text-xl text-[#1E56A0] font-bold"><p>Servicios de asistencia en carretera gratuitos: (500 puntos) </p></div>
                <div class="w-10/12 m-6 text-md font-semibold"><p>Canjea puntos de recompensa para obtener servicios de asistencia en carretera gratuitos, como remolque, cambio de llantas o servicio de batería. </p></div>
            </div>

            <div class="col-start-2 row-start-4 alto-tarjeta-r w-96 rounded-3xl bg-[#F6F6F6] drop-shadow-xl">
                <div class="w-full h-44 text-5xl text-[#1E56A0]" style="background-image:url(/img/iconos_tarjetas/examen-de-conduccion.png); background-size: 40%; background-position:center;background-repeat: no-repeat;"></div>
                <div class="w-10/12 m-6 text-xl text-[#1E56A0] font-bold"><p>Descuento del 30% en cursos de manejo avanzado: (800 puntos) </p></div>
                <div class="w-10/12 m-6 text-md font-semibold"><p>Canjea puntos de recompensa para obtener descuentos especiales en cursos de manejo avanzado que ayuden a mejorar las habilidades de conducción. </p></div>
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

<!--Ventana Modal1-->
<input type="checkbox" id="btn-modal-recompensas">
    <div class="container-modal-recompensas">
        <div class="content-modal-recompensas">
            <h2 class="text-2xl text-[#1E56A0] font-semibold">¡FELICIDADES!</h2>
            <p class="text-justify">
                Haz completado los puntos necesarios para poder canjear esta recompensa.
                <br> Deseas canjearla?
            </p>

            <div class="grid grid-cols-2">
                <div class="cols-star-1 btn-canjear">
                    <label for="btn-modal-recompensas">Cajear</label>
                </div>

                <div class="cols-star-2 btn-cerrar-recompensas">
                    <label for="btn-modal-recompensas">Cerrar</label>
                </div>

            </div>
        </div>

    </div>
<!--Fin de Ventana Modal1-->
@endsection
