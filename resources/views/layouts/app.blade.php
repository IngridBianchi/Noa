<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name', 'Noa'))</title>
    
    <!-- Cargar assets con Vite -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    <!-- Fuente Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-light">
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="{{ route('main') }}">NOA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Menú de navegación -->
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link @if(request()->routeIs('productos-servicios.*')) active @endif" href="{{ route('productos-servicios.index') }}">
                                Productos / Servicios
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->routeIs('rubros.*')) active @endif" href="{{ route('rubros.index') }}">
                                Rubros
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->routeIs('unidad-medidas.*')) active @endif" href="{{ route('unidad-medidas.index') }}">
                                Unidades de Medida
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->routeIs('condicion-ivas.*')) active @endif" href="{{ route('condicion-ivas.index') }}">
                                Condiciones de IVA
                            </a>
                        </li>
                    @endauth
                </ul>

                <!-- Menú de usuario -->
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Perfil</a></li>
                                <li>
                                    <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                                        @csrf
                                    </form>
                                    <a href="#" class="dropdown-item"
                                    onclick="event.preventDefault(); console.log('click logout'); document.getElementById('logout-form').submit();">
                                    Cerrar sesión
                                    </a>
                                  </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-top py-3 mt-4">
        <div class="container text-center text-muted">
            © {{ date('Y') }} Ingrid Bianchi. Todos los derechos reservados.
        </div>
    </footer>
</body>
</html>