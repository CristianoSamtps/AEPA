<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerShipRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
            'foto' =>'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ];
    }
    public function messages(): array
    {
        return[
            'foto.image' => 'O ficheiro não é uma imagem'
        ];
    }
}
