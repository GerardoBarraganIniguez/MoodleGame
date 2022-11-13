<?php

namespace App\Http\Controllers;

use App\Models\Degree;
use Illuminate\Http\Request;

class DegreeController extends Controller
{
    public function index()
    {
        $degrees = Degree::all();
        return view('degree.index', compact('degrees'));
    }

    public function create()
    {
        return view('degree.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);

        Degree::create([
            //first = DB Field
            //Second = form field
            'name' => $request->name
        ]);

        return redirect()->route('degrees.index');
    }

    public function edit(Degree $degree)
    {
        return view('degree.edit', compact('degree'));
    }
    
    public function update(Degree $degree, Request $request)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);

        $degree->update([
            'name' => $request->name
        ]);

        return redirect()->route('degrees.index');
    }

    public function destroy(Degree $degree)
    {
        $degree->delete();
        return redirect()->route('degrees.index');
    }
}
