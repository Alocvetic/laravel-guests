<?php

namespace Database\Seeders;

use App\DataKeeper\CountryKeeper;
use App\Models\Guest;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    public function run(): void
    {
        $countries = CountryKeeper::getAll();

        for ($i = 0; $i < 18; $i++) {
            $countryKey = array_rand($countries);

            Guest::factory()
                ->setCountry($countries[$countryKey])
                ->create();
        }
    }
}
