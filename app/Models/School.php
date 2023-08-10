<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $table = "schools";
    protected $fillable = [
        'name',
        'address',
        'logo',
        'email',
        'phone',
        'website'
    ];

    public $timestamps = true;

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
