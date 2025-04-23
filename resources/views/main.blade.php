@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-body text-center p-5">
                        <h1 class="text-primary fw-bold mb-4">
                            Bienvenido a nuestra plataforma de facturación de productos y servicios
                        </h1>
                        <p class="lead text-muted mb-5">
                            Aquí puedes gestionar todos tus productos y servicios de manera eficiente y sencilla.
                        </p>

                        <!-- Carrusel -->
                        <div id="mainCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
                            </div>
                            <div class="carousel-inner rounded-3">
                                <div class="carousel-item active">
                                    <img src="https://coelabogados.mx/wp-content/uploads/2023/08/facturando.jpg" class="d-block w-100" alt="Facturación">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://cards.algoreducation.com/_next/image?url=https%3A%2F%2Ffiles.algoreducation.com%2Fproduction-ts%2F__S3__69cd418f-a7fc-4779-be40-24fd86860808&w=3840&q=75" class="d-block w-100" alt="Gestión">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://www.sdi.es/wp-content/uploads/2023/09/control-de-tesoreria.png" class="d-block w-100" alt="Control">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>

                        <div class="mt-4">
                            <p class="text-muted">
                                Nuestra plataforma está diseñada para ofrecer una experiencia de usuario intuitiva y eficiente. 
                                Explora nuestras secciones para empezar a utilizar todas las funcionalidades que ofrecemos.
                            </p>
                            @guest
                            <div class="mt-4">
                                <a href="{{ route('login') }}" class="btn btn-primary btn-lg me-3">Iniciar sesión</a>
                                <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg">Registrarse</a>
                            </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection