<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $teachers = Teacher::all();
        return view('teacher.index', compact('teachers'));
    }

    public function create(){
        return view('teacher.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        Teacher::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect()->route('teachers.index');
    }

    public function edit(Teacher $teacher){
        return view('teacher.edit', compact('teacher'));
    }

    public function update(Teacher $teacher, Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $teacher->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect()->route('teachers.index');
    }

    public function destroy(Teacher $teacher){
        $teacher->delete();
        return redirect()->route('teachers.index');
    }
}
