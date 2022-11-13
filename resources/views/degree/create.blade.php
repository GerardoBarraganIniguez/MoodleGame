@extends('layout.app')

@section('title')
    Crear Carrera
@endsection

@section('content')
    <form action="{{ route('degrees.store') }}" method="POST">
        <x-degree-form-body/>
        <input type="submit" value="Crear">
    </form>
@endsection