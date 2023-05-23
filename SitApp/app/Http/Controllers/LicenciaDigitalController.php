<?php

namespace App\Http\Controllers;
/*Librerias utilizadas para el correcto funcionamiento del controlador*/
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LicenciaDigitalController extends Controller
{
    /*Fumnción licencia que tiene como objetivo mostrar los datos de una tabla mediante un join
     y poderlos mandar a cualquier parte que se requiera*/
    public function licencia()
{
    $userId = Auth::id();

    $post = DB::table('users')
            ->join('posts', 'users.id', '=', 'posts.id')
            ->select('posts.licencia_frente', 'posts.licencia_reverso')
            ->where('users.id', $userId)
            ->first();

    return view('licenciaDigital', compact('post'));
}

/*Función que inserta la imagen junto con su nombre en la tabla posts (imagenes de la licencia)*/
    public function imagenLicencia(Request $request)
{
    /*Se obtiene el nomnbre de la primera imagen*/
    $post = new Post();
    $post->no_licencia_frente = $request->no_licencia_frente;

    /*Se obtiene la primera imagen para luego ser guardada*/
    if ($request->hasFile("licencia_frente")) {
        $licencia_frente = $request->file("licencia_frente");
        $nombreImagenFrente = Str::slug($request->no_licencia_frente) . "." . $licencia_frente->guessExtension();
        $rutaFrente = public_path("img/post/");
        $licencia_frente->move($rutaFrente, $nombreImagenFrente);
        $post->licencia_frente = $nombreImagenFrente;
    }
    /*Se obtiene el nomnbre de la segunda imagen*/
    $post->no_licencia_reverso = $request->no_licencia_reverso;

    /*Se obtiene la segunda imagen para luego ser guardada*/
    if ($request->hasFile("licencia_reverso")) {
        $licencia_reverso = $request->file("licencia_reverso");
        $nombreImagenReverso = Str::slug($request->no_licencia_reverso) . "." . $licencia_reverso->guessExtension();
        $rutaReverso = public_path("img/post/");
        $licencia_reverso->move($rutaReverso, $nombreImagenReverso);
        $post->licencia_reverso = $nombreImagenReverso;
    }
/*Se guardan las imagenes y sus nombres respectivamente*/
    $post->save();
/*Se redirecciona a la pagina de licencia para que directamente se vean las imagenes*/
        return redirect('/licenciaDigital');
    }

}
