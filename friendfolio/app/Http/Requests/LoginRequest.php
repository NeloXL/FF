<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "email" => [
                "required",
                "email",
                "exists:users,email",
            ],
            "password" => [
                "required",
                Password::
                min(8)
                ->max(40)
            ]
        ];
    }
    public function messages(): array{
        return [
            "required" => "Поле :attribute обязательно для заполнения",
            "email.email" => "Необходимо ввести валидный email",
            "email.exists" => "Проверьте правильность введенных данных",
            "password.min" => "Пароль должен содержать минимум 8 символов",
            "password.max" => "Пароль должен содержать максимум 40 символов"
        ];
    }

    public function attributes() : array{
        return [
            "email" => "email",
            "password" => "пароль"
        ];
    }
}
