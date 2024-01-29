<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoacaoRequest extends FormRequest
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
            'title' => 'required|min:3',
            'anonimo'=> 'required|in:S,N',
            'valor'=> 'required|numeric|min:1',
            'metodo_pag'=> 'required||in:C,R,M',
            'num_cartao'=>'nullable|integer|digits:12',
            'data_cartao'=>'nullable|date',
            'cvv_cartao'=>'nullable|integer|digits:3',
            'referencia'=>'nullable|integer|digits:21',
            'num_tel'=>'nullable|integer|digits:9',
            'projeto'=>'nullable|exists:projetos,id'
        ];
    }
}
