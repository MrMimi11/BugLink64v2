<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @see FormRequest https://laravel.com/docs/8.x/validation#form-request-validation
 */
class PasswordResetLinkRequest extends FormRequest
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
            'email' => 'required|email',
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
