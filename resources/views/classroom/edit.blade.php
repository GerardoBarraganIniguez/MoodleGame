@extends('layout.app')

@section('title')
    Editar Clase <i>{{ $classroom->id }}</i>
@endsection

@section('content')
    <form action="{{ route('classrooms.update', $classroom) }}" method="POST" autocomplete="off">
        @method('PATCH')
        <x-classroom-form-body :classroom="$classroom" :subjects="$subjects" :sections="$sections" :teachers="$teachers"/>
        <input type="submit" value="Actualizar">
    </form>
@endsection