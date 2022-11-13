@extends('layout.app')

@section('title')
    Página principal
@endsection

@section('content')
<div>
    <a href="{{ route('degrees.create') }}">Crear Carrera</a>
    <a href="{{ route('degrees.index') }}">Mostrar Carreras</a>
</div>

<div>
    <a href="{{ route('students.create') }}">Crear Alumno</a>
    <a href="{{ route('students.index') }}">Mostrar Alumnos</a>
</div>
@endsection
