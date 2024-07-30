<?php

declare(strict_types=1);

namespace App\Factories;

use App\DataKeeper\CountryKeeper;
use App\DTO\Guest\GuestDTO;
use App\Models\Guest;

class GuestFactory
{
    public function populateData(Guest $guest, GuestDTO $dto): Guest
    {
        $guest->first_name = $dto->getFirstName();
        $guest->last_name = $dto->getLastName();
        $guest->phone = $dto->getPhone();
        $guest->email = $dto->getEmail();
        $guest->country = $dto->getCountry();

        return $guest;
    }

    public function toDto(array $data): GuestDTO
    {
        $dto = new GuestDTO();
        $dto->setFirstName(trim($data['first_name']));
        $dto->setLastName(trim($data['last_name']));
        $dto->setEmail(trim($data['email']));

        $phone = trim($data['phone']);
        $dto->setPhone($phone);

        $country = isset($data['country']) ? trim($data['country']) : $this->getCountryByPhone($phone);
        $dto->setCountry($country);

        return $dto;

    }

    protected function getCountryByPhone(string $phone): ?string
    {
        $countries = CountryKeeper::getAll();

        foreach ($countries as $country) {
            if (str_starts_with($phone, $country['code'])) {
                return $country['alpha2'];
            }
        }

        return null;
    }
}
