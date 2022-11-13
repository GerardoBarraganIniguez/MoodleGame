@extends('layout.app')

@section('title')
    Página principal
@endsection

@section('content')
<div>
    <a href="{{ route('degrees.create') }}">Crear Carrera</a>
    <a href="{{ route('degrees.index') }}">Mostrar Carreras</a>
</div>
@endsection
