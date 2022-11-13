<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index()
    {
        $assignments = Assignment::all();
        return view('assignment.index', compact('assignments'));
    }

    public function create()
    {
        return view('assignment.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);

        Assignment::create([
            'name' => $request->name
        ]);

        return redirect()->route('assignments.index');
    }

    public function edit(Assignment $assignment)
    {
        return view('assignment.edit', compact('assignment'));
    }

    public function update(Request $request, Assignment $assignment)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);

        $assignment->update([
            'name' => $request->name
        ]);

        return redirect()->route('assignments.index');
    }

    public function destroy(Assignment $assignment)
    {
        $assignment->delete();
        return redirect()->route('assignments.index');
    }
}
