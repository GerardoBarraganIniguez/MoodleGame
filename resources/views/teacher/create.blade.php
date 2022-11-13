@extends('layout.app')

@section('title')
    Crear Maestro
@endsection

@section('content')
    <form action="{{ route('teachers.store') }}" method="POST" autocomplete="off">
        <x-teacher-form-body/>
        <input type="submit" value="Crear">
    </form>
@endsection