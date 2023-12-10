<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
        $currentId = $this->event ? $this->event->id : null;
        return [
            "name" => 'required|min:3|max:80|unique:events,name,' . $currentId . '|regex:/^[A-ZÀ-úa-z\s]+$/',
            "descricao" => 'required|min:3',
            "localizacao" => 'min:3|max:20|regex:/^[A-ZÀ-úa-z\s]+$/',
            "data" => 'date|after_or_equal:now|date_format:"Y-m-d"'
        ];
    }
    public function messages()
    {
        return [
            'name.regex' => 'O nome deve conter apenas letras e espaços',
            'localizacao.regex' => 'A localização deve conter apenas letras e espaços',
            'data.regex' => 'A data tem de der maior ou igual á atual'
        ];
    }
}
