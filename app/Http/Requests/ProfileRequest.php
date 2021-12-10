<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @see FormRequest https://laravel.com/docs/8.x/validation#form-request-validation
 */
class ProfileRequest extends FormRequest
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
            'pseudo' => 'required|string|unique:user,pseudo',
            'email' => ['required', 'string', 'email', 'max:255',
                Rule::unique('users')->ignore(auth()->user()),
            ],
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
