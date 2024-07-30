<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GuestFactory extends Factory
{
    protected array $country;

    public function setCountry(array $country): static
    {
        $this->country = $country;

        return $this;
    }

    public function definition(): array
    {
        $country = $this->country;

        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->unique()->email(),
            'country' => $country['alpha2'],
            'phone' => $this->generatePhone($country['code'], $country['digits']),
        ];
    }

    private function generatePhone(string $countryCode, int $numberLength)
    {
        $phone = '';
        for ($i = 0; $i < $numberLength; $i++) {
            $phone .= $this->faker->randomDigit();
        }

        return $countryCode . $phone;
    }
}
