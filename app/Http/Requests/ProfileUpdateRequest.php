<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2', 'max:150'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Поле Имя обязательно для заполнения.',
            'name.min' => 'должно быть не короче 2 символов.',
            'name.max' => 'должно быть не короче 2 символов.',
            'email.required'  => 'Поле Email обязательно для заполнения.',
            /*'password.required'  => 'Поле Пароль обязательно для заполнения.',
            'current_password.required'  => 'Поле подтверждения пароля обязательно для заполнения.',
            'current_password.current_password'  => 'Поле подтверждения пароля должно совпадать с новым и текушим паролем.'*/
        ];
    }
}
