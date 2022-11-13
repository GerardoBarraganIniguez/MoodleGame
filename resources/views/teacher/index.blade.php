@extends('layout.app')

@section('title')
    Mostrar todos los teachers
@endsection

@section('content')
    <table>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Contraseña</th>
        </tr>
        @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->password }}</td>
                <td><a href="{{ route('teachers.edit', $teacher) }}">Editar</a></td>
                <td>
                    <form action="{{ route('teachers.destroy', $teacher) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection