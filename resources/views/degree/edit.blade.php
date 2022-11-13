@extends('layout.app')

@section('title')
    Editar tarea <i>{{ $degree->name }}</i> 
@endsection

@section('content')
    <form action="{{ route('degrees.update', $degree) }}" method="POST" autocomplete="off">
        @method('PATCH')
        <x-degree-form-body :degree="$degree"/>
        <input type="submit" value="Actualizar">
    </form>
@endsection