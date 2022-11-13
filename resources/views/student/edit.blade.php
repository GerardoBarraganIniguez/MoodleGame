@extends('layout.app')

@section('title')
    Editar Alumno <i>{{ $student->name }}</i>
@endsection

@section('content')
    <form action="{{ route('students.update', $student) }}" method="POST" autocomplete="off">
        @method('PATCH')
        <x-student-form-body :degrees="$degrees" :student="$student"/>
        <input type="submit" value="Actualizar">
    </form>
@endsection