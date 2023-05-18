
@extends('layout')
@section('content')

<div class="w-3/4 mx-auto">

    <form action ="/imagenLicencia" enctype="multipart/form-data" method="POST">
        @csrf
        <p class="text-5xl text-[#1E56A0] mx-auto w-1/2 pb-10">Ingrese su licencia escaneada</p>
        <input type="text" name="nombre" placeholder="Ingrese nombre: ">
        <input type="file" name="imagen">
        <button type='submit'>Guardar</button>
        <hr><hr>
    </form>
</div>


<div class="w-2/4 mx-auto mt-40">
    @if(isset($post->imagen))
        <img class="object-center mx-auto" src="/img/post/{{$post->imagen}}">
    @endif
</div>
@endsection
