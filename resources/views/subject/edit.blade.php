@extends('layout.app')

@section('title')
    Editar Materia <i>{{ $subject->name }}</i>
@endsection

@section('content')
    <form action="{{ route('subjects.update', $subject) }}" method="POST" autocomplete="off">
        @method('PATCH')
        <x-subject-form-body :subject="$subject"/>
        <input type="submit" value="Actualizar">
    </form>
@endsection