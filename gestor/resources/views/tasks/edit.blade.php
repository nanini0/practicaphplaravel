<h1>Editar Tarea</h1>

<form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    
    {{-- 
       Directiva @method('PUT'):
       Le dice a Laravel: "Aunque el navegador envíe esto como POST, 
       trátalo internamente como una petición PUT para actualizar".
    --}}
    @method('PUT')

    <label>Título:</label>
    {{-- 'value' precarga el dato existente --}}
    <input type="text" name="title" value="{{ $task->title }}" required>
    <br>

    <label>Descripción:</label>
    <textarea name="description">{{ $task->description }}</textarea>
    <br>

    <button type="submit">Actualizar</button>
</form>