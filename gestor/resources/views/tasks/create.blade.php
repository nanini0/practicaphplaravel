<h1>Crear Nueva Tarea</h1>

{{-- 1. La Acción: El formulario envía los datos a la ruta 'store' usando POST --}}
<form action="{{ route('tasks.store') }}" method="POST">

    {{-- 
       ¡OJO AQUÍ! @csrf 
       Esto genera un input oculto con un token de seguridad. 
       Sin esto, Laravel rechazará la petición (Error 419). 
       Protege contra ataques donde otros sitios intentan enviar datos haciéndose pasar por ti.
    --}}
    @csrf

    <label for="title">Título:</label>
    <input type="text" name="title" id="title" required>
    <br><br>

    <label for="description">Descripción:</label>
    <textarea name="description" id="description"></textarea>
    <br><br>

    <button type="submit">Guardar Tarea</button>
</form>