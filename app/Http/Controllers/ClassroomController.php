<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::all();
        return view('classroom.index',compact('classrooms'));
    }

    public function create()
    {
        $subjects = Subject::all();
        $sections = Section::all();
        $teachers = Teacher::all();
        return view('classroom.create', compact('subjects','sections','teachers'));
    }

    public function store(Request $request)
    {
        Classroom::create([
            'subject_id' => $request->subject,
            'section_id' => $request->section,
            'teacher_id' => $request->teacher
        ]);

        return redirect()->route('classrooms.index');
    }

    public function edit(Classroom $classroom)
    {
        $subjects = Subject::all();
        $sections = Section::all();
        $teachers = Teacher::all();
        return view('classroom.edit', compact('classroom','subjects','sections','teachers'));
    }

    public function update(Request $request, Classroom $classroom)
    {
        $classroom->update([
            'subject_id' => $request->subject,
            'section_id' => $request->section,
            'teacher_id' => $request->teacher
        ]);

        return redirect()->route('classrooms.index');
    }
    
    public function destroy(Classroom $classroom)
    {
        $classroom->delete();
        return redirect()->route('classrooms.index');
    }
}
