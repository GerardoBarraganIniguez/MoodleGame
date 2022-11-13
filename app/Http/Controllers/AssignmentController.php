<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index()
    {
        $assignments = Assignment::all();
        return view('assignment.index', compact('assignments'));
    }

    public function create(Classroom $classroom)
    {
        return view('assignment.create', compact('classroom'));
    }

    public function store(Classroom $classroom, Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required'
        ]);

        Assignment::create([
            'classroom_id' => $classroom->id,
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('assignments.index');
    }

    public function edit(Assignment $assignment)
    {
        return view('assignment.edit', compact('assignment'));
    }

    public function update(Assignment $assignment, Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required'
        ]);

        $assignment->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route('assignments.index');
    }

    public function destroy(Assignment $assignment)
    {
        $assignment->delete();
        return redirect()->route('assignments.index');
    }
}
