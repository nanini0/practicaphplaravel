<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetario Laravel - @yield('title')</title>
    
    {{-- Estilos de Bootstrap (Solo para que se vea bien rápido) --}}
    
</head>
<body>

    {{-- ESTE ES TU NAVBAR (Se repetirá en todas las páginas) --}}
    <nav class="navbar" style="background-color: #4CAF50; padding: 10px; border-radius: 5px;">
    <div class="container" style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
        
        <!-- Logo a la izquierda -->
        <a class="navbar-brand" href="/" style="color: white; font-weight: bold; font-size: 1.5rem; text-decoration: none;">Recetas Destacadas</a>
        
        <!-- Links centrados -->
        <div class="collapse navbar-collapse" style="flex: 1; display: flex; justify-content: center;">
            <ul class="navbar-nav" style="display: flex; list-style: none; gap: 30px; margin: 0; padding: 0;">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('recetas.index') }}" style="color: white; text-decoration: none; font-weight: bold;">Listado</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('recetas.create') }}" style="color: white; text-decoration: none; font-weight: bold;">Nueva Receta</a>
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
    <footer class="text-center ">
        <small></small>
    </footer>

</body>
</html>







