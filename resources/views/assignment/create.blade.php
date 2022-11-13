@extends('layout.app')

@section('title')
    Crear Materia
@endsection

@section('content')
    <form action="{{ route('assignments.store') }}" method="POST" autocomplete="off">
        <x-assignment-form-body/>
        <input type="submit" value="Crear">
    </form>
@endsection