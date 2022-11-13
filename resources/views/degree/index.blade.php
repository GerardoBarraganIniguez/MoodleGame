@extends('layout.app')

@section('title')
    Mostrar Todas las Carreras
@endsection

@section('content')
    <table>
        <tr>
            <th>degree</th>
        </tr>
        @foreach ($degrees as $degree)
            <tr>
                <td>{{ $degree->name }}</td>
                <td><a href="{{ route('degrees.edit', $degree) }}">Editar</a></td>
                <td>
                    <form action="{{ route('degrees.destroy', $degree) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection