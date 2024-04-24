<?php

namespace App\Http\Requests\Admin\Post;

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
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'preview_image' => 'nullable|file',
            'main_image' => 'nullable|file',
            'category_id' => 'required|integer|exists:categories,id',
            'tags_id' => 'nullable|array',
            'tags_id.*' => 'nullable|integer|exists:tags,id',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Поле важливе для заповнення!',
            'title.max:25' => 'Не має перевищувати 25 символів!',
            'content.required' => 'Поле важливе для заповнення!',
            'preview_image.required' => 'Поле важливе для заповнення!',
            'preview_image.file' => 'Оберіть файл!',
            'main_image.required' => 'Поле важливе для заповнення!',
            'main_image.file' => 'Оберіть файл!',
            'category_id.required' => 'Поле важливе для заповнення!',
            'tags_id.array' => 'Оберіть теги!',
        ];
    }
}
