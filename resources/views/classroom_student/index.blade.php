@extends('layout.app')

@section('title')
    Mostrar relacion Alumno-Clase
@endsection

@section('content')
    <table>
        <tr>
            <th>Alumno</th>
            <th>Clase</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                @foreach ($student->classrooms as $classroom)
                    <td>{{ $classroom->subject->name }}</td>
                @endforeach
            </tr>
        @endforeach
    </table>
@endsection