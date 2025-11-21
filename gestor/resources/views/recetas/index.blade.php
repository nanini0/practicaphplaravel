@extends('layouts.app')
@section('content')
<div>
    <h1>Recetas</h1>
    @if(session('success'))
        <div>
            {{session('suuccess')}}
        </div>
    @endif

    <a href="{{route('recetas.create')}}" class="btn">Nueva tarea</a> {{-- el button tiene se con css--}}
    
<div>
    @foreach($recetas as $receta)
        <div class="receta">
            <h2>{{ $receta->nombre }}</h2>
            <strong>Ingredientes</strong>
            <ul>
                @foreach($receta->ingredientes as $ingrediente)
                    <li>{{ $ingrediente }}</li>
                @endforeach
            </ul>
            <p>{{ $receta->descripcion }}</p>
            <p>Chef: {{ $receta->chef }}</p>
            <a href="{{ route('recetas.edit', $receta->id) }}">Editar</a>
            <form action="{{ route('recetas.destroy', $receta->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Seguro?')">Eliminar</button>
            </form>
        </div>
    @endforeach
</div>


</div>




@endsection