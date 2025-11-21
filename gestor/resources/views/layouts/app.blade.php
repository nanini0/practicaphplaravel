<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetario Laravel - @yield('title')</title>
    
    {{-- Estilos de Bootstrap (Solo para que se vea bien rápido) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    {{-- ESTE ES TU NAVBAR (Se repetirá en todas las páginas) --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('recetas.index') }}">👨‍🍳 Mi Recetario</a>
            
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('recetas.index') }}">Listado</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('recetas.create') }}">Nueva Receta</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- CONTENIDO DINÁMICO --}}
    <div class="container">
        {{-- 
            Aquí está la MAGIA. 
            @yield('content') es un "hueco" donde las vistas hijas
            inyectarán su contenido específico.
        --}}
        @yield('content')
    </div>

    {{-- Footer común --}}
    <footer class="text-center mt-5 py-3 text-muted">
        <small></small>
    </footer>

</body>
</html>







