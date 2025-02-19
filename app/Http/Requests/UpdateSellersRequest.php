<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSellersRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name'  => 'sometimes|string|max:255', // "sometimes" permite que el campo sea opcional
            'email' => 'sometimes|string|email|max:255|unique:sellers,email,' . $this->seller->id,
        ];
    }

    /**
     * Mensajes de error personalizados.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.string'  => 'El nombre debe ser una cadena de texto.',
            'name.max'     => 'El nombre no puede exceder los 255 caracteres.',
            'email.string' => 'El correo electrónico debe ser una cadena de texto.',
            'email.email' => 'El correo electrónico debe ser una dirección válida.',
            'email.max'   => 'El correo electrónico no puede exceder los 255 caracteres.',
            'email.unique'=> 'El correo electrónico ya está en uso.',
        ];
    }
}
