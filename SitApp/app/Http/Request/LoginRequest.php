<?php

namespace App\Http\Request;
/*Librerias utilizadas para el correcto funcionamiento del controlador*/
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        /*Se indica que los parametros correo y password serán necesarios
        para poder inicias sesión, de otra forma habrá un error de loggeo*/
        return [
            'correo' => 'required',
            'password' => 'required',
        ];

    }/*Se obtienen las credenciales para poder validad el poder inicias sesión*/
        public function getCredentials(){

            $correo = $this ->get('correo');

            return $this->only('correo', 'password');

        }


}
