<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'student_id',
        'phone',
    ];

    public function classes() {
        return $this->belongsToMany(Subject::class,
            'subject_students',
            'student_id',
            'subject_id');
    }
}
