@extends('layout.app')

@section('title')
    Editar Maestro <i>{{ $teacher->name }}</i>
@endsection

@section('content')
    <form action="{{ route('teachers.update', $teacher) }}" method="POST">
        @method('PATCH')
        <x-teacher-form-body :teacher="$teacher"/>
        <input type="submit" value="Actualizar">
    </form>
@endsection