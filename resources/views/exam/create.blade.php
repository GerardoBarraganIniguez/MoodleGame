@extends('layout.app')

@section('title')
    Crear examen clase: <i>{{ $classroom->id }}</i>
@endsection

@section('content')
    <form action="{{ route('exams.store', $classroom) }}" method="POST" autocomplete="off">
        <x-exam-form-body/>
        <input type="submit" value="Crear">
    </form>
@endsection