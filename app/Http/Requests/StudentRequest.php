<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'required|date',
            'hometown' => 'nullable|string'
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'El nombre es requerido.',
            'last_name.required' => 'Los apellidos son requeridos.',
            'date_of_birth.required' => 'La fecha de nacimiento es requerida.',
            'date_of_birth.date' => 'La fecha de nacimiento debe ser una fecha válida.',
            'hometown.string' => 'La ciudad natal debe ser un texto válido.',
        ];
    }
}
