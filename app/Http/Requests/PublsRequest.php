<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublsRequest extends FormRequest
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
            'date'=>['required', 'date'],
            'ru_header'=>['required', 'string', 'min:10', 'max:255'],
            'en_header'=>['required', 'string', 'min:10', 'max:255'],
            'ru_biblio'=>['required', 'string', 'min:20', 'max:5000'],
            'en_biblio'=>['required', 'string', 'min:20', 'max:5000'],
            'doi'=>['nullable', 'string', 'min:10', 'max:255'],
            'ru_abstract'=>['required', 'string', 'min:200','max:15000'],
            'en_abstract'=>['nullable','string', 'min:200', 'max:15000'],
            'ext_url'=>['nullable', 'url'],
            'pdf'=>['sometimes','file','mimes:pdf']
        ];
    }
}
