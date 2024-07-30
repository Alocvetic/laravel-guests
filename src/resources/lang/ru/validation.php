<?php

return [
    'required' => 'Поле :attribute обязательно для заполнения.',
    'boolean' => 'Поле :attribute должно быть истиной или ложью.',
    'integer' => 'Поле :attribute должно быть целым числом.',
    'string' => 'Поле :attribute должно быть строкой.',
    'regex' => 'Поле :attribute имеет ошибочный формат.',
    'unique' => 'Такое значение поля :attribute уже существует.',
    'exists' => 'Выбранное значение для :attribute некорректно.',
    'digits' => 'Длина поля :attribute должна быть :digits.',
    'max' => [
        'integer' => 'Поле :attribute должно быть не больше :max.',
        'string' => 'Поле :attribute должно быть не длиннее :max символов.',
    ],
    'min' => [
        'integer' => 'Поле :attribute должно быть не менее :min.',
        'string' => 'Поле :attribute должно быть не короче :min символов.',
    ],
    'email' => 'Поле :attribute должно быть действительным электронным адресом.',
    'size'                 => [
        'string'  => 'Поле :attribute должно быть длиной :size символов.',
    ],
];
