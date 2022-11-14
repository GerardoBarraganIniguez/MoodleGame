@extends('layout.app')

@section('title')
    Mostrar Todos los Examenes
@endsection

@section('content')
    <table>
        <tr>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Clase a la que pertenece</th>
        </tr>
        @foreach ($exams as $exam)
            <tr>
                <td>{{ $exam->name }}</td>
                <td>{{ $exam->description }}</td>
                <td>{{ $exam->classroom_id }}</td>
                <td><a href="{{ route('exams.edit', $exam) }}">Editar</a></td>
                <td>
                    <form action="{{ route('exams.destroy', $exam) }}" method="POST" autocomplete="off">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection