<?php

declare(strict_types=1);

namespace App\Repositories\Db;

use App\DTO\Guest\GuestDTO;
use App\Factories\GuestFactory;
use App\Models\Guest;
use Illuminate\Database\Eloquent\Collection;

class GuestRepository
{
    public function __construct(
        protected GuestFactory $factory,
    ) {
    }

    /**
     * Получение всех записей Guest
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return Guest::all();
    }

    /**
     * Получение записи Guest по id
     *
     * @param int $id
     * @return Guest
     */
    public function getById(int $id): Guest
    {
        return Guest::where('id', $id)->firstOrFail();
    }

    /**
     * Проверка наличия записи Guest по id
     *
     * @param int $id
     * @return bool
     */
    public function checkById(int $id): bool
    {
        return Guest::where('id', $id)->exists();
    }

    /**
     * Создание записи Guest
     *
     * @param GuestDTO $dto
     * @return int
     */
    public function create(GuestDTO $dto): int
    {
        $guest = new Guest();

        $this->factory->populateData($guest, $dto);
        $guest->save();

        return $guest->id;
    }

    /**
     * Обновление записи Guest
     *
     * @param int $id
     * @param GuestDTO $dto
     * @return int
     */
    public function update(int $id, GuestDTO $dto): int
    {
        $guest = Guest::where('id', $id)->first();

        $this->factory->populateData($guest, $dto);
        $guest->save();

        return $guest->id;
    }

    /**
     * Удаление записи Guest по Id
     *
     * @param int $id
     * @return void
     */
    public function delete(int $id): void
    {
        Guest::where('id', $id)->delete();
    }
}
