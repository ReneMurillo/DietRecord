<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CitasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fecha' => 'required|unique:citas',
            'hora' => 'required',
            'causa' => 'min:4|required',
            'id_medico' => 'required',
            'id_consultorio' => 'required',
            'diagnostico' => 'min:4|required',
        ];
    }
}
