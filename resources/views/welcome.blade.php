<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Noa</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Cargar archivos CSS y JS de Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">Noa</a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Iniciar sesión</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Registrarse</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="container">
            <h1 class="display-4 text-primary fw-bold">Bienvenido a Noa</h1>
            <p class="lead">Tu plataforma para gestionar servicios de forma simple y efectiva.</p>
            <a href="{{ route('register') }}" class="btn btn-primary btn-lg mt-3">Comenzar ahora</a>
        </div>
    </section>

    <footer class="text-center py-4 mt-5 border-top text-muted">
        © {{ date('Y') }} Ingrid Bianchi.
    </footer>

</body>
</html>
