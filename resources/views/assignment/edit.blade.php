@extends('layout.app')

@section('title')
    Editar tarea <i>{{ $assignment->name }}</i>
@endsection

@section('content')
    <form action="{{ route('assignments.update', $assignment) }}" method="POST" autocomplete="off">
        @method('PATCH')
        <x-assignment-form-body :assignment="$assignment"/>
        <input type="submit" value="Actualizar">
    </form>
@endsection