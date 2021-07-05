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
     * @return array
     */
    public function rules()
    {
        return [
            'name'      => 'bail|required|min:2|max:128|string',
            'surname'   => 'bail|required|min:2|max:128|string',
            'email'     => 'bail|required|min:6|max:255|email',
            'message'   => 'bail|required|min:24|max:1024',
            'checkbox'  => 'accepted'
        ];
    }
}
