<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoEventRequest extends FormRequest
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
            'fotografia' =>$this->photo?'nullable':'required'.'|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'destaque' => 'required|in:sim,não',
            "descricao" => 'required|min:3',
        ];
    }
}
