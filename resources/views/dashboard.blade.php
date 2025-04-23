@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="content text-center">
            <h1 class="welcome-heading">
                Bienvenido a nuestra plataforma de facturación de productos y servicios.
            </h1>
            <h3 class="description-heading">    
                Aquí puedes gestionar todos tus productos y servicios de manera eficiente y sencilla.
            </h3>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-bs-ride="carousel" data-bs-interval="4000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://coelabogados.mx/wp-content/uploads/2023/08/facturando.jpg" class="d-block w-100" alt="Imagen Oficina 1">
                </div>
                <div class="carousel-item">
                    <img src="https://cards.algoreducation.com/_next/image?url=https%3A%2F%2Ffiles.algoreducation.com%2Fproduction-ts%2F__S3__69cd418f-a7fc-4779-be40-24fd86860808&w=3840&q=75" class="d-block w-100" alt="Imagen Oficina 2">
                </div>
                <div class="carousel-item">
                    <img src="https://www.sdi.es/wp-content/uploads/2023/09/control-de-tesoreria.png" class="d-block w-100" alt="Imagen Oficina 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>

        <div class="footer-text">
            <h5>
                Nuestra plataforma está diseñada para ofrecer una experiencia de usuario intuitiva y eficiente. Explora nuestras secciones para empezar a utilizar todas las funcionalidades que ofrecemos.
            </h5>
        </div>
    </div>
@endsection
