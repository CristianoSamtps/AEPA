<?php

namespace App\Http\Requests;

use App\Models\Projeto;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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

        $tituloRules = [
            'required',
            'min:5',
            'max:45',
            'regex:/^[A-ZÀ-úa-z\'\s]+/',
        ];

        if ($this->isMethod('post')) {
            $tituloRules[] = Rule::unique('projetos', 'titulo');
        }

        return [
            'titulo' => $tituloRules,
            'subtitulo' => 'required|string|max:110|regex:/^[A-ZÀ-úa-z\s]+/',
            'descricao' => 'required|string|min:25|regex:/^[A-ZÀ-úa-z\s\.,]+/',
            'estado' => 'required|string|in:' . implode(',', array_keys(Projeto::estado_opcoes())),
            'localidade' => 'required|string|max:50|regex:/^[A-ZÀ-úa-z\s,]+/',
            'objetivos' => 'required|string|max:8|regex:/^\d{1,10}(\.\d{2})?$/',
            'data_final' => 'date|after_or_equal:now',
            'fotografia' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'O Título é obrigatório.',
            'titulo.min' => 'O Título deve ter pelo menos 5 caracteres.',
            'titulo.max' => 'O Título deve ter no máximo 45 caracteres.',
            'titulo.unique' => 'O Título já está em uso.',
            'titulo.regex' => 'O Título deve conter apenas letras, espaços e apóstrofos.',
            'subtitulo.required' => 'O Subtítulo é obrigatório.',
            'subtitulo.max' => 'O Subtítulo deve ter no máximo 110 caracteres.',
            'subtitulo.regex' => 'O Subtítulo deve conter apenas letras e espaços.',
            'descricao.required' => 'A Descrição é obrigatória.',
            'descricao.min' => 'A Descrição deve ter pelo menos 25 caracteres.',
            'descricao.regex' => 'A Descrição deve conter apenas letras, espaços, vírgulas e pontos.',
            'estado.required' => 'O Estado é obrigatório.',
            'estado.in' => 'O Estado selecionado não é válido.',
            'localidade.required' => 'A Localidade é obrigatória.',
            'localidade.max' => 'A Localidade deve ter no máximo 50 caracteres.',
            'localidade.regex' => 'A Localidade deve conter apenas letras, espaços e vírgulas.',
            'objetivos.required' => 'Os Objetivos são obrigatórios.',
            'objetivos.max' => 'Os Objetivos devem ter no máximo 8 caracteres.',
            'objetivos.regex' => 'Os Objetivos devem conter apenas números (máximo 99999.99).',
            'data_final.date' => 'A Data Final deve ser uma data válida.',
            'data_final.after_or_equal' => 'A Data Final deve ser igual ou posterior à data atual.',
            'fotografias.image' => 'A Fotografia deve ser uma imagem.',
            'fotografias.mimes' => 'A Fotografia deve ser do tipo jpeg, png, jpg ou gif.',
            'fotografias.max' => 'A Fotografia não pode ter mais do que 2048 KB.',
        ];
    }
}
