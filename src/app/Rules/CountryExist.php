<?php

namespace App\Rules;

use App\DataKeeper\CountryKeeper;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CountryExist implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $countries = CountryKeeper::getAll();

        foreach ($countries as $country) {
            if (trim($value) === $country['alpha2']) {
                return;
            }
        }

        $fail('Такой страны нет в списке доступных: код alpha2 = ' . $value);
    }
}
