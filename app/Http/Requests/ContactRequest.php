<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "first_name"=>['required', 'min:3', 'max:255'],
            "last_name"=>['required', 'min:3', 'max:255'],
            "email"=>['required', 'email'],
            "phone_number"=>['required', 'min:9', 'max:50'],
            "city_id"=>['required', 'exists:cities,id']
        ];
    }
    public function messages()
    {
        return [
            'first_name.required'=>"Polje za ime je obavezno polje",
            'first_name.min'=>"Ime mora biti makar :min karaktera duzine"
        ];
    }
}

