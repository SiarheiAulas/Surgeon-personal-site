<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LandingRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'ru_text'=>['required', 'string', 'min:5', 'max:5000'],
            'en_text'=>['required', 'string', 'min:5', 'max:5000']
        ];
    }
}
