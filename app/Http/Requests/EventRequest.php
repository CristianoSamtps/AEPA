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
        return false;
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
            "name" => 'required|min:3|max:80|unique:events,title,' . $currentId . '|regex:/^[A-ZÀ-úa-z\s]+$/',
            "localizacao" => 'min:3|max:20|regex:/^[A-ZÀ-úa-z\s]+$/',
            "date" => 'date|before_or_equal:now|date_format:"Y-m-d"',
            "vagas" => 'min:3|max:200',
        ];
    }
}
