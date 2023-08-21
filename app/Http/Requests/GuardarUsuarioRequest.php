<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class GuardarUsuarioRequest extends FormRequest
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
            "nombre" => "required|max:500",
            "correo_electronico" => "required|email|unique:usuarios,correo_electronico",
            "password" => ['required', Password::min(8)->letters()->mixedCase()->numbers()->symbols()->uncompromised(), "max:32"],
            "rol" => "required|in:periodista,usuario,admin,editor"
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator)) -> errors();
        throw new HttpResponseException(response()->json($errors, 422)
        );
    }
}
