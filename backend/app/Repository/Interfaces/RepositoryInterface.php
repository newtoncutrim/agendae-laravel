<?php

namespace App\Repository\Interfaces;

interface RepositoryInterface
{
    public function all(): array;
    public function find(int$id): ?object;
    public function create(array $data): object;
    public function update(int $id, array $data): object;
    public function delete(int $id): object;
}
