<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'pseudo' => 'required|string|unique:users,pseudo',
            'email' => 'required|string',
            'password' => 'required|string|min:8', //minimum 8 caractères et confirmation mot de passe
            'password_confirmation' => 'required|string|min:8|same:password', //minimum 8 caractères et confirmation mot de passe
        ];
    }
}
