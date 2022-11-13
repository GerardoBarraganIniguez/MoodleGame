@extends('layout.app')

@section('title')
    Mostrar Todas las secciones
@endsection

@section('content')
    <table>
        <tr>
            <th>Seccion</th>
        </tr>
        @foreach ($sections as $section)
            <tr>
                <td>{{ $section->name }}</td>
                <td><a href="{{ route('sections.edit', $section) }}">Editar</a></td>
                <td>
                    <form action="{{ route('sections.destroy', $section) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection