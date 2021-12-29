<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfsRequest extends FormRequest
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
            'start_date'=>['required', 'date'],
            'end_date'=>['nullable', 'date'],
            'ru_header'=>['required','string', 'min:4', 'max:255'],
            'en_header'=>['required','string', 'min:4', 'max:255'],
            'ru_description'=>['required','string', 'min:4', 'max:2000'],
            'en_description'=>['required','string', 'min:4', 'max:2000'],
            'url_video'=>['nullable','url'],
            'presentation'=>['sometimes','file','mimes:pdf,jpg']
        ];
    }
}
