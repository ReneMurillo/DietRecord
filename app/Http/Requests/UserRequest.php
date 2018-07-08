<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre_completo' => 'min:8|max:250|required',
            'genero' => 'required',
            'username' => 'min:4||max:30|required|unique:users',
            'dui' => 'min:9|max:10|unique:users',
        ];
    }
}
