<?php

namespace App\Http\Controllers;

use App\Models\Degree;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    public function create()
    {
        $degrees = Degree::all();
        return view('student.create', compact('degrees'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'degree_id' => $request->degree
        ]);

        return redirect()->route('students.index');
    }

    public function edit(Student $student)
    {
        $degrees = Degree::all();
        return view('student.edit', compact('student', 'degrees'));
    }

    public function update(Request $request, Student $student)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'degree_id' => $request->degree
        ]);

        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }
}
