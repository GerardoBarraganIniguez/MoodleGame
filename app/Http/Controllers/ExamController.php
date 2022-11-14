<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Classroom;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        $exams = Exam::all();
        return view('exam.index', compact('exams'));
    }

    public function create(Classroom $classroom)
    {
        return view('exam.create', compact('classroom'));
    }

    public function store(Classroom $classroom, Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required'
        ]);

        Exam::create([
            'name' => $request->name,
            'description' => $request->description,
            'classroom_id' => $classroom->id
        ]);

        return redirect()->route('exams.index');
    }

    public function edit(Exam $exam)
    {
        return view('exam.edit', compact('exam'));
    }

    public function update(Exam $exam, Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required'
        ]);

        $exam->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route('exams.index');
    }

    public function destroy(Exam $exam)
    {
        $exam->delete();
        return redirect()->route('exams.index');
    }
}
