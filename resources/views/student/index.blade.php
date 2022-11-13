@extends('layout.app')

@section('title')
    Mostrar Todos los Alumnos
@endsection

@section('content')
    <table>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Carrera</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->password }}</td>
                <td>{{ $student->degree->name }}</td>
                <td><a href="{{ route('students.edit', $student) }}">Editar</a></td>
                <td>
                    <form action="{{ route('students.destroy', $student) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection