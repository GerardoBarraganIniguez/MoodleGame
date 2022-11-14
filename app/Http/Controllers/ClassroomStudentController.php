<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Http\Request;
use App\Models\ClassroomStudent;

class ClassroomStudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $classrooms = Classroom::all();

        return view('classroom_student.index', compact('students', 'classrooms'));
    }

    public function create(Student $student)
    {
        $classrooms = Classroom::all();
        return view('classroom_student.create', compact('student', 'classrooms'));
    }

    public function store(Student $student, Request $request)
    {
        ClassroomStudent::create([
            'student_id' => $student->id,
            'classroom_id' => $request->classroom_id
        ]);

        return redirect()->route('classrooms_students.index');
    }
}
