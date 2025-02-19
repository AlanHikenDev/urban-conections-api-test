<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Sellers;
class StoreSellersRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => 'required', 
            'email' => 'required|string|lowercase|email|max:255|unique:'.Sellers::class,
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo nombre de orden es necesario.',
            'email.required' => 'El campo email es necesario.',
            'email.email' => 'El campo emaol debe de ser vailido',
        ];
    }
}
