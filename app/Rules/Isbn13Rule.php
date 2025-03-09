<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Isbn13Rule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
    }

    public function passes($attribute, $value) {
        $isbn = preg_replace('/[^0-9]/', '', $value);

        if (strlen($isbn) !== 13 || !in_array(substr($isbn, 0, 3), ['978', '979'])) return false;

        // Calculate check digits
        $sum = 0;
        for ($i = 0; $i < 12; $i++) {
            $weight = ($i % 2 === 0) ? 1 : 3;
            $sum += (int)$isbn[$i] * $weight;
        }

        $checkDigit = (10 - ($sum % 10)) % 10;

        return $checkDigit === (int)$isbn[12];
    }

    public function message() {
        return 'The :attribute must be a valid ISBN-13.';
    }
}
