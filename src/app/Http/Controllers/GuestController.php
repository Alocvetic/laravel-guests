<?php

namespace App\Http\Controllers;

use App\Http\Requests\Guest\{CreateGuestRequest, UpdateGuestRequest};
use App\Services\GuestService;
use Illuminate\Http\JsonResponse;

class GuestController extends Controller
{
    public function __construct(
        protected GuestService $service,
    ) {
    }

    public function index(): JsonResponse
    {
        return $this->service->getAll();
    }

    public function show(int $id): JsonResponse
    {
        return $this->service->getItem($id);
    }

    public function create(CreateGuestRequest $request): JsonResponse
    {
        return $this->service->create($request);
    }

    public function update(UpdateGuestRequest $request, int $id): JsonResponse
    {
        return $this->service->update($request, $id);
    }

    public function delete(int $id): JsonResponse
    {
        return $this->service->delete($id);
    }
}
