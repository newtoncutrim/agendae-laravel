<?php

namespace App\Repository\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface RepositoryInterface
{
    public function all(): Collection;
    public function find(int$id): ?object;
    public function create(array $data): object;
    public function update(int $id, array $data): object;
    public function delete(int $id): object;
}
