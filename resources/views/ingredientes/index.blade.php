@extends('layouts.app')

@section('content')
    <h1 class="my-4">Ingredientes</h1>
    <a href="{{ route('ingredientes.create') }}" class="btn btn-primary mb-3">Crear Ingrediente</a>
    <ul class="list-group">
        @foreach ($ingredientes as $ingrediente)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <h5>{{ $ingrediente->nombre }}</h5>
                    <p>Receta: {{ $ingrediente->receta ? $ingrediente->receta->nombre : 'Sin receta asociada' }}</p>
                    <p>Cantidad: {{ $ingrediente->cantidad }}</p>
                </div>
                <div class="btn-group">
                    <a href="{{ route('ingredientes.show', $ingrediente->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('ingredientes.edit', $ingrediente->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('ingredientes.destroy', $ingrediente->id) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este ingrediente?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection



