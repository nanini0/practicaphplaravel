@extends('layouts.app')
@section('content')

<form action="{{ route('recetas.update', $receta->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{ old('nombre', $receta->nombre) }}">

    <label>Ingredientes:</label>
    <div id="ingredientes-container">
        @foreach($receta->ingredientes as $ingrediente)
            <input type="text" name="ingredientes[]" value="{{ $ingrediente }}">
        @endforeach
    </div>
    <button type="button" onclick="agregarIngrediente()">Añadir ingrediente</button>

    <label>Descripción:</label>
    <textarea name="descripcion">{{ old('descripcion', $receta->descripcion) }}</textarea>

    <label>Chef:</label>
    <input type="text" name="chef" value="{{ old('chef', $receta->chef) }}">

    <button type="submit">Actualizar</button>
</form>

<script>
function agregarIngrediente() {
    const container = document.getElementById('ingredientes-container');
    const input = document.createElement('input');
    input.type = 'text';
    input.name = 'ingredientes[]';
    container.appendChild(input);
}
</script>


@endsection