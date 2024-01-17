<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
          'name'=>'required|min:3|max:40|regex:/^[A-ZÀ-úa-z\s]+$/',
           'email' =>'required|email|unique:users,email,'.
                    ($this->user?$this->user->id:''),
           'foto' =>'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
           'genero' => 'nullable|in:F,M,O,N',
           'data_nascimento' => 'nullable|date|date_format:Y-m-d',
           'telemovel' => 'nullable|string|max:13',
           'password'=>'min:3|max:40',
           'subscrito' => 'nullable|in:S,N',
           'metodo_pag' => 'nullable|in:CC,TB,RE',
        ];
    }
    public function messages(): array
    {
        return[
            'foto.image' => 'O ficheiro não é uma imagem'
        ];
    }

}
