<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostsRequest extends FormRequest
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
            'ru_header'=>['required', 'string', 'min:4', 'max:255'],
            'en_header'=>['nullable', 'string', 'min:4', 'max:255'],
            'ru_body'=>['required', 'string', 'min:50', 'max:5000'],
            'en_body'=>['nullable', 'string', 'min:50', 'max:5000'],
            'slug'=>['required', 'string', 'min:4', 'max:100'],
            'url'=>['nullable', 'url'],
            'attachextension'=>['sometimes', 'string', 'min:3', 'max:5'],
            'attach'=>['sometimes','file','mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,jpg,gif,bmp,png,sql,accdb,djvu']
        ];
    }
}
