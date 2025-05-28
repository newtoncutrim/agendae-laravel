<?php

namespace App\Services\User;

use App\Models\User;
use App\Repository\User\UserRepository;
use Illuminate\Database\Eloquent\Collection;

class UserService
{
    public function __construct(private UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function all(): Collection
    {
        return $this->repository->all();
    }
    public function create(array $data): User
    {
        return $this->repository->create($data);
    }
    public function find($id): User
    {
        return $this->repository->find($id);
    }

    public function update($id, array $data): User
    {
        return $this->repository->update($id, $data);
    }

    public function delete($id): User
    {
        return $this->repository->delete($id);
    }
}
