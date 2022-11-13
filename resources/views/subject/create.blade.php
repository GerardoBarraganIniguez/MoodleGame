@extends('layout.app')

@section('title')
    Crear Materia
@endsection

@section('content')
    <form action="{{ route('subjects.store') }}" method="POST" autocomplete="off">
        <x-subject-form-body/>
        <input type="submit" value="Crear">
    </form>
@endsection