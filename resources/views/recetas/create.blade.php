@extends('layouts.app')

@section('content')
    <h1 class="my-4">Crear Receta</h1>
    <form action="{{ route('recetas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success mt-3">Guardar</button>
    </form>
@endsection

