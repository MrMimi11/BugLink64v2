<?php

namespace App\Http\Requests;

use App\Rules\MatchOldPassword;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @see FormRequest https://laravel.com/docs/8.x/validation#form-request-validation
 */
class PasswordRequest extends FormRequest
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
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => 'required|string',
            'new_password_confirmation' => 'required|same:new_password'
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
