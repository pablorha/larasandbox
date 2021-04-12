@extends('layouts.plantilla')

@section('title', 'Create')

@section('content')
    <h1>Create</h1>

    <form action="{{ route('cursos.store') }}" method="POST">

        @csrf

        <label>
            Nombre:*
            <br>
            <input type="text" name="name">
        </label>

        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <label>
            Description:*
            <br>
            <textarea name="description" rows="5"></textarea>
        </label>

        @error('description')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection
