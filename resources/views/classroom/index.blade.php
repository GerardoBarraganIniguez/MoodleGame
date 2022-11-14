@extends('layout.app')

@section('title')
    Mostrar Todas las Clases
@endsection

@section('content')
    <table>
        <tr>
            <th>Materia</th>
            <th>Seccion</th>
            <th>Maestro</th>
        </tr>
        @foreach ($classrooms as $classroom)
            <tr>
                <td>{{ $classroom->subject->name }}</td>
                <td>{{ $classroom->section->name }}</td>
                <td>{{ $classroom->teacher->name}}</td>
                <td><a href="{{ route('assignments.create', $classroom) }}">Crear Tarea</a></td>
                <td><a href="{{ route('exams.create', $classroom) }}">Crear Examen</a></td>
                <td><a href="{{ route('classrooms.edit', $classroom) }}">Editar Clase</a></td>
                <td>
                    <form action="{{ route('classrooms.destroy', $classroom) }}" method="POST" autocomplete="off">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection