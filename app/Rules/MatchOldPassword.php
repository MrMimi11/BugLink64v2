<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;

/**
 * @see Rule https://laravel.com/docs/8.x/validation#custom-validation-rules
 */
class MatchOldPassword implements Rule
{
    /**
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        return Hash::check($value, auth()->user()->password);
    }

    /**
     * @return string
     */
    public function message(): string
    {
        return 'Current password missmatch.';
    }
}
