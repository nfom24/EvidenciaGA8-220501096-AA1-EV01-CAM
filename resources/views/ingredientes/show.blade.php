@extends('layouts.app')

@section('content')
    <h1 class="my-4">{{ $ingrediente->nombre }}</h1>
    <p>Receta: {{ $ingrediente->receta ? $ingrediente->receta->nombre : 'Sin receta asociada' }}</p>
    <p>Cantidad: {{ $ingrediente->cantidad }}</p>
    <a href="{{ route('ingredientes.index') }}" class="btn btn-primary">Volver a la lista</a>
@endsection

