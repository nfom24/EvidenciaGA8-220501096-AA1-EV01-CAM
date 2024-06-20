@extends('layouts.app')

@section('content')
    <h1 class="my-4">Editar Ingrediente</h1>
    <form action="{{ route('ingredientes.update', $ingrediente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="receta_id">Receta:</label>
            <select name="receta_id" id="receta_id" class="form-control">
                @foreach ($recetas as $receta)
                    <option value="{{ $receta->id }}" {{ $receta->id == $ingrediente->receta_id ? 'selected' : '' }}>{{ $receta->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $ingrediente->nombre }}">
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="text" name="cantidad" id="cantidad" class="form-control" value="{{ $ingrediente->cantidad }}">
        </div>
        <button type="submit" class="btn btn-success mt-3">Actualizar</button>
    </form>
@endsection
