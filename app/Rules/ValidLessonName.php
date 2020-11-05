<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidLessonName implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return (strlen($value) > 5 && strlen($value) <= 20);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute length must be more than 5 and less than 20';
    }
}
