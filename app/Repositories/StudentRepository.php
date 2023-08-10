<?php

namespace App\Repositories;

use App\Interfaces\CrudRepositoryInterface;
use App\Models\School;
use App\Models\Student;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class StudentRepository implements CrudRepositoryInterface
{
    public function getAll(): Collection
    {
        return Student::all();
    }

    public function findById(int $id): ?Model
    {
        return Student::find($id);
    }

    public function create(array $data): Model
    {
        return Student::create($data);
    }

    public function update(array $data, int $id): bool
    {
        return Student::find($id)->update($data);
    }

    public function delete(int $id): bool
    {
        return Student::destroy($id);
    }

    public function selectSchools(){
        return School::select('name as label', 'id as value')->get();
    }
}
