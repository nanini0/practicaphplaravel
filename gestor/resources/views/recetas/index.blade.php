@extends('layouts.app')
@section('content')
@vite(['resources/css/recetas/contenedor.css',])

<div class="contenedor-receta">
    
    
    @if(session('success'))
        <div>
            {{session('suuccess')}}
        </div>
    @endif

    <div class="header-recetas">
    <h2 class="titulo">Recetas</h2>
    <a href="{{ route('recetas.create') }}" class="boton">Nueva receta</a>
</div>
    
<div class="grid-recetas">
    @foreach($recetas as $receta)
        <div class="tarjeta-receta">
            <div class="contenido-tarjeta">
                
                <!-- Información a la izquierda -->
                <div class="info-receta">
                    <h2>{{ $receta->nombre }}</h2>
                    <strong>Ingredientes:</strong>
                    <ul>
                        @foreach($receta->ingredientes as $ingrediente)
                            <li>{{ $ingrediente }}</li>
                        @endforeach
                    </ul>
                    <p>
                        {{ Str::limit($receta->descripcion, 250, '...') }}
                    </p>
                    <p>Chef: {{ $receta->chef }}</p>
                </div>

                <!-- Imagen a la derecha -->
                <div class="img-receta">
                    <img src="" >
                </div>
            </div>

            <!-- Botones siempre abajo -->
            <div class="botones-receta">
                <a href="{{ route('recetas.edit', $receta->id) }}" class="btn-editar">Editar</a>
                <form action="{{ route('recetas.destroy', $receta->id) }}" method="POST" onsubmit="return confirm('¿Seguro?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-eliminar">Eliminar</button>
                </form>
            </div>
        </div>
    @endforeach
</div>




</div>




@endsection