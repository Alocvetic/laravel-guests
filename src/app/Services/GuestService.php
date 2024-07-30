<?php

declare(strict_types=1);

namespace App\Services;

use App\Factories\GuestFactory;
use App\Http\Requests\Guest\{CreateGuestRequest, UpdateGuestRequest};
use App\Repositories\Db\GuestRepository;
use Illuminate\Http\JsonResponse;

class GuestService
{
    public function __construct(
        protected GuestRepository $repository,
        protected GuestFactory $factory,
    ) {
    }

    public function getAll(): JsonResponse
    {
        $guests = $this->repository->getAll();

        return ResponseApi::json($guests->toArray());
    }

    public function getItem(int $id): JsonResponse
    {
        $guest = $this->repository->getById($id);

        return ResponseApi::json($guest->toArray());
    }

    public function create(CreateGuestRequest $request): JsonResponse
    {
        $guestDto = $this->factory->toDto($request->toArray());
        $id = $this->repository->create($guestDto);

        return ResponseApi::json(['id' => $id], message: 'Пользователь успешно добавлен!');
    }

    public function update(UpdateGuestRequest $request, int $id): JsonResponse
    {
        if (!$this->repository->checkById($id)) {
            return ResponseApi::json(status: 404, message: 'Запись не найдена!');
        }

        $guestDto = $this->factory->toDto($request->toArray());
        $id = $this->repository->update($id, $guestDto);

        return ResponseApi::json(['id' => $id], message: 'Данные пользователя успешно обновлены!');
    }

    public function delete(int $id): JsonResponse
    {
        if (!$this->repository->checkById($id)) {
            return ResponseApi::json(status: 404, message: 'Запись не найдена!');
        }

        $this->repository->delete($id);

        return ResponseApi::json(message: 'Пользователь успешно удален!');
    }
}
