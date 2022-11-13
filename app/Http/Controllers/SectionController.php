<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::all();
        return view('section.index', compact('sections'));
    }

    public function create()
    {
        return view('section.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);

        Section::create([
            'name' => $request->name
        ]);

        return redirect()->route('sections.index');
    }

    public function edit(Section $section)
    {
        return view('section.edit', compact('section'));
    }

    public function update(Request $request, Section $section)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);

        $section->update([
            'name' => $request->name
        ]);

        return redirect()->route('sections.index');
    }

    public function destroy(Section $section)
    {
        $section->delete();
        return redirect()->route('sections.index');
    }
}
