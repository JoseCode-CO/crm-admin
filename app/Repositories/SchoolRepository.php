<?php

namespace App\Repositories;

use App\Http\Controllers\GeneralController;
use App\Interfaces\CrudRepositoryInterface;
use App\Models\School;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;

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
        $imagePath = null;
        if (isset($data['logo']) && $data['logo'] instanceof UploadedFile) {
            $imgUrl = GeneralController::imgUpload($data['logo']);
        }

        return School::create([
            'name' => $data['name'],
            'address' => $data['address'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'logo' => $imgUrl ?? ''
        ]);
    }

    public function update(array $data, int $id): bool
    {
        $school = School::find($id);

        if (!$school) {
            return false;
        }

        if (isset($data['logo']) && $data['logo'] instanceof UploadedFile) {
            if ($school->logo) {
                Storage::disk('public')->delete($school->logo);
            }

            $imgUrl = GeneralController::imgUpload($data['logo']);
            $data['logo'] = $imgUrl ?? '';
        }

        return $school->update($data);
    }

    public function delete(int $id): bool
    {
        $school = School::find($id);

        if (!$school) {
            return false;
        }

        if ($school->logo) {
            Storage::disk('public')->delete($school->logo);
        }

        return $school->delete();
    }
}
