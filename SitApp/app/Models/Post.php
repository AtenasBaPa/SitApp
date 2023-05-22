<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rules\Unique;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'imagen'
    ];

}
