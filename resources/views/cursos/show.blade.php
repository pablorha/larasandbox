@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)

@section('content')
    <h1>Bienvenido al curso {{ $curso->name }}</h1>
    <p><strong>{{ $curso->description }}</strong></p>
    <a href="{{ route('cursos.edit', $curso) }}">Editar Curso</a>
@endsection
