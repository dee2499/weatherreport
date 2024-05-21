<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WeatherRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'city' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'city.required' => 'The city field is required.',
        ];
    }
}