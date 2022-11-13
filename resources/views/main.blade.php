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

<div>
    <a href="{{ route('teachers.create') }}">Crear Maestro</a>
    <a href="{{ route('teachers.index') }}">Mostrar Maestros</a>
</div>

<div>
    <a href="{{ route('subjects.create') }}">Crear Materia</a>
    <a href="{{ route('subjects.index') }}">Mostrar Materias</a>
</div>

<div>
    <a href="{{ route('sections.create') }}">Crear Seccion</a>
    <a href="{{ route('sections.index') }}">Mostrar Secciones</a>
</div>

<div>
    <a href="{{ route('classrooms.create') }}">Crear Clase</a>
    <a href="{{ route('classrooms.index') }}">Mostrar Clases</a>
</div>

<div>
    <td><a href="{{ route('assignments.index') }}">Mostrar Tareas</a></td>
</div>
@endsection
