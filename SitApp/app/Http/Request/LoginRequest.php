<?php

namespace App\Http\Request;
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
        return [
            'correo' => 'required',
            'password' => 'required',
        ];

    }
        public function getCredentials(){

            $correo = $this ->get('correo');
            /*
            if($this->isEmail($name)){
                    return [
                        'email' => $name,
                        'password' => $this->get('password')
                    ];
            }
            */
            return $this->only('correo', 'password');

        }

            /*
        public function isEmail($value){
            $factory = $this->container->make(ValidationFactory::class);

            return !$factory->make(['name' => $value], ['name' => 'email'])->fails();

        }

        */

}
