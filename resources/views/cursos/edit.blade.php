@extends('layouts.plantilla')

@section('title', 'Edit')

@section('content')
    <h1>Aqui podras editar el curso</h1>

    <form action="{{ route('cursos.update', $curso) }}" method="POST">

        @csrf

        @method('put')
        
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ $curso->name }}">
        </label>
        <br>

        <label>
            Description:
            <br>
            <textarea name="description" rows="5">{{ $curso->description }}</textarea>
        </label>
        <br>

        <button type="submit">Actualizar</button>
    </form>
@endsection
