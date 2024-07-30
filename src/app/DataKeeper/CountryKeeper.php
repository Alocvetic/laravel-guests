<?php

declare(strict_types=1);

namespace App\DataKeeper;

class CountryKeeper
{
    public const RUSSIA = [
        'name' => 'Российская Федерация',
        'alpha2' => 'ru',
        'code' => '+7',
        'digits' => 10,
    ];

    public const CHINA = [
        'name' => 'Китай',
        'alpha2' => 'ch',
        'code' => '+86',
        'digits' => 11,
    ];

    public const EGYPT = [
        'name' => 'Египет',
        'alpha2' => 'eg',
        'code' => '+20',
        'digits' => 10,
    ];

    public const TURKEY = [
        'name' => 'Турция',
        'alpha2' => 'tr',
        'code' => '+90',
        'digits' => 10,
    ];

    public static function getAll(): array
    {
        return [
            'Russia' => self::RUSSIA,
            'China' => self::CHINA,
            'Egypt' => self::EGYPT,
            'Turkey' => self::TURKEY,
        ];
    }
}
