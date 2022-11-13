@extends('layout.app')

@section('title')
    Crear Alumno
@endsection

@section('content')
    <form action="{{ route('students.store') }}" method="POST" autocomplete="off">
        <x-student-form-body :degrees="$degrees"/>
        <input type="submit" value="Crear">
    </form>
@endsection