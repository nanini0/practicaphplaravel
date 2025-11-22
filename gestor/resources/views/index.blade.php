
@vite(['resources/css/home/tarjetaReceta.css'
,'resources/css/home/iniciohome.css'
,'resources/css/home/contenedor.css',
'resources/css/home/footer.css',
'resources/css/home/navbar.css',])

<nav class="navbar">
  <div class="nav-container">
    <div class="nav-logo">
      <a href="/">Recetas Destacadas</a>
    </div>
    
    <ul class="nav-menu">
      <li class="nav-item">
        <a href="{{ route('recetas.index') }}" class="nav-link">Recetas</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('recetas.create') }}" class="nav-link">Crear Receta</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
<div class="ad-space left">
    <!-- Espacio para publicidad izquierda -->
</div>
<div class="main-content">
<h2 class="titulo">Recetas Destacadas</h2>
<div class="in">
    <div class="grid-inicio">
        <div class="inicio-tarjeta">
            <h2>Aplicacion Recetas</h2>
            <p>
            Explora y guarda tus recetas favoritas desde cualquier dispositivo, crea nuevas recetas paso a paso y sigue a tus chefs preferidos. 
            La aplicación te permite mantener todo organizado y fácil de encontrar para que cocinar sea divertido y sencillo.
            </p>
        </div>

    </div>
    <div class="grid-inicio">
        <div class="inicio-tarjeta">
            <h2>Planificador de Menú</h2>
            <p>
            Organiza tus comidas semanales fácilmente, planifica desayunos, almuerzos y cenas, y genera listas de compras automáticas 
            basadas en los ingredientes que necesitas. Ahorrarás tiempo y evitarás desperdiciar alimentos.
            </p>
        </div>

    </div>
    
</div>
  

<section>
    @if($recetasDestacadas->isEmpty())
        <p>No hay recetas destacadas por el momento.</p>
    @else
        <div class="grid-recetas">
            @foreach($recetasDestacadas as $receta)
                <div class="tarjeta">
                    <h3>{{ $receta->nombre }}</h3>
                    <p>Chef: {{ $receta->chef }}</p>
                    
                    <a href="{{ route('recetas.show', $receta) }}">Ver Receta</a>
                </div>
            @endforeach
        </div>
    @endif
</section>
</div>
 <div class="ad-space right">
    <!-- Espacio para publicidad derecha -->
</div>
</div>
<footer class="footer">
  <div class="footer-content">
    <div class="footer-section">
      <h3>Recetas Destacadas</h3>
      <p>Tu aplicación favorita de recetas</p>
    </div>
    
    <div class="footer-section">
      <h4>Enlaces</h4>
      <ul>
        <li><a href="/">Inicio</a></li>
        <li href="{{route('recetas.index')}}" >Recetas</li>
        <li><a href="">Planificador</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </div>
    
    <div class="footer-section">
      <h4>Contacto</h4>
      <p>email@ejemplo.com</p>
      <p>+1 234 567 890</p>
    </div>
  </div>
  
  <div class="footer-bottom">
    <p>&copy; 2024 Recetas Destacadas. Todos los derechos reservados.</p>
  </div>
</footer>
