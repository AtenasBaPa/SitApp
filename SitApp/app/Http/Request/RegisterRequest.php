<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
        /*Valida los parametros ingresados en el forms y especifica que son requeridos para el registro*/
        return [
            'correo' => 'required:unique:users,correo',
            'nombre' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'licencia' => 'required|min:9',
            'tarjeta' => 'required|min:9',
            'curp' => 'required|min:18',
        ];
    }
}
