<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле важливе для заповнення',
            'name.string' => 'Має бути строкою',
            'email.required' => 'Поле важливе для заповнення',
            'email.unique' => 'Данный email вже зайнятий',
            'email.email' => 'Введіть корректний email',
        ];
    }
}
