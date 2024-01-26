<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParticipantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           'obs'=>'required|min:3|regex:/^[A-ZÀ-úa-z0-9\s]+$/',
           'date'=>'required|after_or_equal:date',
           'event_id'=>'required',
           'member_doner_id'=>'required'
        ];


    }
}
