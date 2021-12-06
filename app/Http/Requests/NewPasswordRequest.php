<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @see FormRequest https://laravel.com/docs/8.x/validation#form-request-validation
 */
class NewPasswordRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|string|confirmed|min:8',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     * i.e 'email' => 'email address',
     * @return array
     */
    public function attributes(): array
    {
        return [
            //
        ];
    }
}
