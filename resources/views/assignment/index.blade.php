@extends('layout.app')

@section('title')
    Mostrar Todas las tareas
@endsection

@section('content')
    <table>
        <tr>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Clase a la que pertenece</th>
        </tr>
        @foreach ($assignments as $assignment)
            <tr>
                <td>{{ $assignment->name }}</td>
                <td>{{ $assignment->description }}</td>
                <td>{{ $assignment->classroom_id }}</td>
                <td><a href="{{ route('assignments.edit', $assignment) }}">Editar</a></td>
                <td>
                    <form action="{{ route('assignments.destroy', $assignment) }}" method="POST" autocomplete="off">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection