@extends('layouts.app')

@section('content')
    <h1 class="my-4">{{ $receta->nombre }}</h1>
    <p>{{ $receta->descripcion }}</p>
    <a href="{{ route('recetas.index') }}" class="btn btn-primary">Volver a la lista</a>
@endsection
