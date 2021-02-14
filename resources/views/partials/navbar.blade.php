<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">               
                    <div class="navbar-nav">                    
                        <a class="nav-link active" href="/">Inicio</a>
                        
                        <a class="nav-link" href="{{url('/reporte')}}">Reporte</a>    
                        <a class="nav-link" href="{{url('/nosotros')}}">Nosotros</a>                         
                        <a class="nav-link" href="{{url('/buscar')}}">Buscar</a>                        
                        @if( Auth::check() )    
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                                Editar
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="añadir">Añadir</a></li>
                                <li><a class="dropdown-item" href="eliminar">Eliminar</a></li>
                            </ul>
                        </div>
                                 
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Cerrar Sesión
                            </button>
                        </form>
                
                        @elseif(!Auth::check())
                            <a class="nav-link" href="login">Iniciar Sesión</a> 
                        @endif
                    </div>
                </div>
            </div>
        </div>
                 
    </div>
</nav>

