@extends('layout.app')

@section('title')
    Crear Seccion
@endsection

@section('content')
    <form action="{{ route('sections.store') }}" method="POST" autocomplete="off">
        <x-section-form-body/>
        <input type="submit" value="Crear">
    </form>
@endsection