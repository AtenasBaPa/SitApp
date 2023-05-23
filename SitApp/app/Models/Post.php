<?php

namespace App\Models;
/*Librerias utilizadas para el correcto funcionamiento del controlador*/
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rules\Unique;

class Post extends Model
{
    /*Columnas de la tabla Post*/
    use HasFactory;
    protected $fillable = [
        'no_licencia',
        'licencia_frente',
        'licencia_reverso',
    ];

}
