@extends('layout.app')

@section('title')
    Mostrar todas las Materias
@endsection

@section('content')
<table>
    <tr>
        <th>Materia</th>
    </tr>
    @foreach ($subjects as $subject)
        <tr>
            <td>{{ $subject->name }}</td>
            <td><a href="{{ route('subjects.edit', $subject) }}">Editar</a></td>
            <td>
                <form action="{{ route('subjects.destroy', $subject) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar">
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection