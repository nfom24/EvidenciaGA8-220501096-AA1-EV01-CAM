@extends('layouts.app')

@section('content')
    <h1 class="my-4">Editar Receta</h1>
    <form action="{{ route('recetas.update', $receta->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $receta->nombre }}">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion" class="form-control">{{ $receta->descripcion }}</textarea>
        </div>
        <button type="submit" class="btn btn-success mt-3">Actualizar</button>
    </form>
@endsection
