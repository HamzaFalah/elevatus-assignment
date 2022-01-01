<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckLengthRule implements Rule
{
    private $strCompare; 

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($strCompare)
    {
        $this->strCompare = $strCompare;
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
        return (strlen($value) == strlen($this->strCompare)); 
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute string must be of the same length for other string.';
    }
}
