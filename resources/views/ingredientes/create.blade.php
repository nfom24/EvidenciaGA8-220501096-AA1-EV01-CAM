@extends('layouts.app')

@section('content')
    <h1 class="my-4">Crear Ingrediente</h1>
    <form action="{{ route('ingredientes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="receta_id">Receta:</label>
            <select name="receta_id" id="receta_id" class="form-control">
                @foreach ($recetas as $receta)
                    <option value="{{ $receta->id }}">{{ $receta->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="text" name="cantidad" id="cantidad" class="form-control">
        </div>
        <button type="submit" class="btn btn-success mt-3">Guardar</button>
    </form>
@endsection


