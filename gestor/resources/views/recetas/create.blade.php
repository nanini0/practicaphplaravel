@extends('layouts.app')
@section('content')
<form action="{{ route('recetas.store') }}" method="POST">
    @csrf
    <label>Nombre:</label>
    <input type="text" name="nombre">

    <label>Ingredientes:</label>
    <div id="ingredientes-container">
        <input type="text" name="ingredientes[]">
    </div>
    <button type="button" onclick="agregarIngrediente()">Añadir ingrediente</button>

    <label>Descripción:</label>
    <textarea name="descripcion"></textarea>

    <label>Chef:</label>
    <input type="text" name="chef">

    <button type="submit">Guardar</button>
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