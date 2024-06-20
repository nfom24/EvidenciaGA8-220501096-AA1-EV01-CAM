@extends('layouts.app')

@section('content')
    <h1 class="my-4">Recetas</h1>
    <a href="{{ route('recetas.create') }}" class="btn btn-primary mb-3">Crear Receta</a>
    <ul class="list-group">
        @foreach ($recetas as $receta)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <h5>{{ $receta->nombre }}</h5>
                    <p>{{ $receta->descripcion }}</p>
                </div>
                <div class="btn-group">
                    <a href="{{ route('recetas.show', $receta->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('recetas.edit', $receta->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('recetas.destroy', $receta->id) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar esta receta?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection


