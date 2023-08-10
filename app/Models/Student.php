<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = "students";
    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'hometown',
        'schools_id'
    ];

    public $timestamps = true;

    public function school()
{
    return $this->belongsTo(School::class, 'schools_id');
}

}
