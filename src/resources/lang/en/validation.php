<?php

return [
    'required' => 'The :attribute field is required.',
    'boolean' => 'The :attribute field must be true or false.',
    'integer' => 'The :attribute field must be an integer.',
    'string' => 'The :attribute field must be a string.',
    'regex' => 'The :attribute field is in an invalid format.',
    'unique' => 'The :attribute field value already exists.',
    'exists' => 'The selected value for :attribute is invalid.',
    'digits' => 'The :attribute field length must be :digits.',
    'max' => [
        'integer' => 'The :attribute field must be no longer than :max.',
        'string' => 'The :attribute field must be no longer than :max characters.',
    ],
    'min' => [
        'integer' => 'The :attribute field must be no less than :min.',
        'string' => 'The :attribute field must be no shorter than :min characters.',
    ],
    'email' => 'The :attribute field must be a valid email address.',
    'size' => [
        'string' => 'The :attribute field must be :size characters long.',
    ],
];
