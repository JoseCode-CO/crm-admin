<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SchoolRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'address' => 'required',
            'logo' => 'nullable|mimes:jpeg,png|max:2048|dimensions:min_width=200,min_height=200',
            'email' => [
                'nullable',
                'email',
                Rule::unique('schools', 'email')->ignore($this->school, 'id')
            ],
            'phone' => [
                'nullable',
                Rule::unique('schools', 'phone')->ignore($this->school, 'id')
            ],
            'website' => 'nullable|url'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'address.required' => 'La dirección es obligatoria.',
            'logo.mimes' => 'El logotipo debe ser una imagen en formato JPEG o PNG.',
            'logo.max' => 'El logotipo no debe ser más grande que 2 MB.',
            'logo.dimensions' => 'El logotipo debe tener un tamaño mínimo de 200x200 píxeles.',
            'email.email' => 'Ingrese una dirección de correo electrónico válida.',
            'email.unique' => 'Esta dirección de correo electrónico ya está registrada.',
            'phone.unique' => 'Este número de teléfono ya está registrado.',
            'website.url' => 'Ingrese una URL válida para el sitio web.',
        ];
    }
}
