<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
   // public function authorize()
   // {
   //     return false;
   // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'from'=>['required', 'string', 'min:2', 'max:50'],
            'rating'=>['required', 'integer','digits:1', 'min:1', 'max:5'],
            'header'=>['required', 'string', 'min:5', 'max:255'],
            'email'=>['required', 'email'],
            'text'=>['required', 'string', 'min:10', 'max:1000']
        ];
    }
}
