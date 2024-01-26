<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FotografiaProjetoRequest extends FormRequest
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
            'fotografias' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'destaque' => 'boolean|nullable',
        ];
    }

    public function messages()
    {
        return [
            'fotografias.image' => 'A Fotografia deve ser uma imagem.',
            'fotografias.mimes' => 'A Fotografia deve ser do tipo jpeg, png, jpg ou gif.',
            'fotografias.max' => 'A Fotografia não pode ter mais do que 2048 KB.',
        ];
    }
}
