<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BiosRequest extends FormRequest
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
            'ru_univer'=>['required','string', 'min:4', 'max:255'],
            'ru_intern'=>['required','string', 'min:4', 'max:255'],
            'ru_aspirant'=>['required','string', 'min:4', 'max:255'],
            'ru_departments'=>['required','string', 'min:4', 'max:2000'],
            'ru_courses'=>['required','string', 'min:4', 'max:2000'],
            'ru_practic_interes'=>['required','string', 'min:4', 'max:1000'],
            'ru_research_interes'=>['required','string', 'min:4', 'max:255'],
            'ru_society'=>['required','string', 'min:4', 'max:255'],
            'en_univer'=>['required','string', 'min:4', 'max:255'],
            'en_intern'=>['required','string', 'min:4', 'max:255'],
            'en_aspirant'=>['required','string', 'min:4', 'max:255'],
            'en_departments'=>['required','string', 'min:4', 'max:2000'],
            'en_courses'=>['required','string', 'min:4', 'max:2000'],
            'en_practic_interes'=>['required','string', 'min:4', 'max:1000'],
            'en_research_interes'=>['required','string', 'min:4', 'max:255'],
            'en_society'=>['required','string', 'min:4', 'max:255'],
            'photo'=>['required','file','mimes:png,jpg,bmp','dimensions:width=600,height=195'],
        ];
    }
}
