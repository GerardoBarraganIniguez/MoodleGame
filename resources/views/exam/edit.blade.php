@extends('layout.app')

@section('title')
    Editar examen <i>{{ $exam->name }}</i>
@endsection

@section('content')
    <form action="{{ route('exams.update', $exam) }}" method="POST" autocomplete="off">
        @method('PATCH')
        <x-exam-form-body :exam="$exam"/>
        <input type="submit" value="Actualizar">
    </form>
@endsection