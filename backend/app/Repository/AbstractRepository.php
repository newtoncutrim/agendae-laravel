<?php

namespace App\Repository;

use App\Repository\Interfaces\RepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

abstract class AbstractRepository implements RepositoryInterface
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function find($id): ?object
    {
        return $this->model->find($id);
    }

    public function create(array $data): object
    {
        return $this->model->create($data);
    }

    public function update($id, array $data): object
    {
        $model = $this->model->find($id);
        $model->update($data);
        return $model;
    }

    public function delete($id): object
    {
        $model = $this->model->find($id);
        $model->delete();
        return $model;
    }
}
