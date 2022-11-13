@extends('layout.app')

@section('title')
    Editar seccion <i>{{ $section->name }}</i>
@endsection

@section('content')
    <form action="{{ route('sections.update',$section) }}" method="POST" autocomplete="off">
        @method('PATCH')
        <x-section-form-body :section="$section"/>
        <input type="submit" value="Actualizar">
    </form>
@endsection