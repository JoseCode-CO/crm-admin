<?php

namespace App\Repositories;

use App\Interfaces\CrudRepositoryInterface;
use App\Models\School;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class SchoolRepository implements CrudRepositoryInterface
{
    public function getAll(): Collection
    {
        return School::all();
    }

    public function findById(int $id): ?Model
    {
        return School::find($id);
    }

    public function create(array $data): Model
    {
        return School::create($data);
    }

    public function update(array $data, int $id): bool
    {
        return School::find($id)->update($data);
    }

    public function delete(int $id): bool
    {
        return School::destroy($id);
    }
}
