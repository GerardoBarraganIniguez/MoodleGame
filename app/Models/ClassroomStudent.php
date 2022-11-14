<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassroomStudent extends Model
{
    use HasFactory;

    protected $table = 'classroom_student'; //laravel hace referencia a "classroom_students" y no a "classroom_student"

    protected $fillable = [
        'student_id',
        'classroom_id'
    ];
}
