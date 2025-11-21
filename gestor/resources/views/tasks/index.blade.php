<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mis Tareas</title>
</head>
<body>
    <h1>Lista de Tareas</h1>
    {{-- Mostrar mensaje de exito --}}
    @if(session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif  
    <a href="{{ route('tasks.create') }}"> Nueva Tarea </a>

    <ul>
        {{-- Directiva @foreach: Itera sobre la variable $tasks que enviamos desde el controlador --}}
        @foreach ($tasks as $task)
            <li>
                <p>{{ $task->title }}</p>
                
                {{-- Enlace a Editar (GET es seguro aquí) --}}
                <a href="{{ route('tasks.edit', $task->id) }}">Editar</a>

                {{-- Botón Eliminar (Formulario para usar DELETE) --}}
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Seguro?')">Eliminar</button>
                </form>
            </li>
    @endforeach
    </ul>
    
</body>
</html>