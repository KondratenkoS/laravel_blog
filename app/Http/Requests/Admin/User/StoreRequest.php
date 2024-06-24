<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string|max:25',
            'email' => 'required|string|email|max:255|unique:users',
//            'password' => 'required|string',
            'role' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле важливе для заповнення',
            'name.unique' => 'Вказане ім\'я вже зайняте',
            'name.string' => 'Має бути строкою',
            'email.required' => 'Поле важливе для заповнення',
            'email.unique' => 'Вказаний email вже зайнятий',
            'email.email' => 'Введіть корректний email',
//            'password.required' => 'Поле важливе для заповнення'
        ];
    }
}
