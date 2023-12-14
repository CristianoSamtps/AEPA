<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjetoRequest extends FormRequest
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
        $currentId = $this->projetos ? $this->projetos->id : null;
        return [
            'titulo' => 'required|string|max:80',
            'subtitulo' => 'required|string|max:120',
            'descricao' => 'required|string|min:3',
            'localidade' => 'required|string|max:50',
            'objetivos' => 'required|string|max:10',
            'fotografias' => 'required|string|max:80',
            // "titulo" => 'required|min:3|max:80|unique:projetos,titulo,' . $currentId . '|regex:/^[A-ZÀ-úa-z\s]+$/',
            // "subtitulo" => 'required|min:3|max:80|regex:/^[A-ZÀ-úa-z\s]+$/',
            // "descricao" => 'required|min:25',
            // "localidade" => 'required|min:3|max:50',
            // "objetivos" => 'required|regex:/^\d{10}\.\d{2}$/',
            // "data_final" => 'date|after_or_equal:now|date_format:"Y-m-d"'
        ];
    }
    public function messages()
    {
        return [
            // 'titulo.regex' => 'O Título deve conter apenas letras e espaços!',
            // 'subtitulo.regex' => 'O Subtítulo deve conter apenas letras e espaços!',
            // 'descricao.regex' => 'A Descrição tem de ter pelo menos 25 caracteres!',
            // 'localidade.regex' => 'A localização deve conter apenas letras e espaços!',
            // 'objetivos.regex' => 'O objetivo deve conter apenas números e somente duas casas decimais!',
        ];
    }
}
