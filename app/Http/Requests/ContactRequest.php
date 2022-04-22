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
            'nickname' => 'required|string|max:120',
            'email' => 'required|email|max:120',
            'object' => 'required|string|max:250',
            'content' => 'required|string|max:2000',
            'g-recaptcha-response' => 'recaptcha',
        ];
    }
}
