@extends('layout.app')

@section('title')
    Crear tarea clase: <i>{{ $classroom->id }}</i>
@endsection

@section('content')
    <form action="{{ route('assignments.store', $classroom) }}" method="POST" autocomplete="off">
        <x-assignment-form-body/>
        <input type="submit" value="Crear">
    </form>
@endsection