@extends('layout.app')

@section('title')
    Crear Clase
@endsection

@section('content')
    <form action="{{ route('classrooms.store') }}" method="POST" autocomplete="off">
        <x-classroom-form-body :subjects="$subjects" :sections="$sections" :teachers="$teachers"/>
        <input type="submit" value="Crear">
    </form>
@endsection