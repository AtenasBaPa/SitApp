<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     *//*Columnas de la tabla Users*/
    protected $fillable = [
        'correo',
        'nombre',
        'password',
        'licencia',
        'tarjeta',
        'curp',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    /*Al momento de ingresar la contraseña en el forms estará de forma oculta para mayor seguridad*/
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*Encrita la contraseña con metodos hash para evitar robo de credenciales e
    información delicada*/
    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt ($value);
    }
}
