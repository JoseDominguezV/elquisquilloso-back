<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarArticuloRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "titulo" => "required|max:500",
            "subtitulo" => "required|max:500",
            "imagen_portada" => "required",
            "contenido" => "required",
            "estado_revision" => "required",
            "autor_id" => "required"
        ];
    }
}
