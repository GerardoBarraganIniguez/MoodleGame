@extends('layout.app')

@section('title')
    Mostrar todas las Materias
@endsection

@section('content')
<table>
    <tr>
        <th>Materia</th>
    </tr>
    @foreach ($assignments as $assignment)
        <tr>
            <td>{{ $assignment->name }}</td>
            <td><a href="{{ route('assignments.edit', $assignment) }}">Editar</a></td>
            <td>
                <form action="{{ route('assignments.destroy', $assignment) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar">
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection