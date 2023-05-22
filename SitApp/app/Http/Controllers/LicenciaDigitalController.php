<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class LicenciaDigitalController extends Controller
{
    public function licencia(){
        $post = Post::find(1);
        return view('licenciaDigital',compact("post"));

    }

    public function licencia2(){
        $post = Post::find(1);
        return view('docs',compact("post"));

    }


    public function imagenLicencia(Request $request){

        $post = new Post();
        $post->nombre = $request->nombre;

        if($request->hasfile("imagen")){

            $imagen = $request->file("imagen");
            $nombreImagen = Str::slug($request->nombre).".".$imagen->guessExtension();
            $ruta = public_path("img/post/");
            copy($imagen->getRealPath(),$ruta.$nombreImagen);
            $post->imagen = $nombreImagen;
        }
        $post->save();

        return redirect('/licenciaDigital');
    }
}
