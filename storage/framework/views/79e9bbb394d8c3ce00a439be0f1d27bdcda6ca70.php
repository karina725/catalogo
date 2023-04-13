<!doctype html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="catálogo">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Catálogo de Películas</title>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }
      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }
      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }
      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }
      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      body {
        min-height: 75rem;
        padding-top: 4.5rem;
      }
      .imgHome{
        background: url("/img/9e1761ceb91fdf7460bc4d66f0681f62.jpeg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
      .info{
        color: white;
        font-size: 15px;
        text-align: center;
        background:black;
      }

    </style>

  </head>

  <body class="imgHome">

    <main class="container">
        <header class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <img class="navbar-brand-logo" src="/img/imagen_peliculas.jpeg" alt="Logo" data-hs-theme-appearance="default" height="50px">
                <a class="navbar-brand" href="#">Catálogo de Películas</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Id película" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </header>
        <div class="bg-light p-5 rounded">
            <h1>Catálogo de Películas</h1>
            <p class="descripcion">Una película (del latín pellicula), es una serie de imágenes fijas que, cuando se proyectan en una pantalla de forma consecutiva en rápida sucesión, crean la ilusión óptica de imágenes en movimiento. El término normalmente se usa como sinónimo de obra cinematográfica, es decir, una historia (ficticia o documental), registrada en un soporte (película flexible o contenedor digital) que se graba y lee mediante un mecanismo continuo o intermitente de sucesión de imágenes.</p>
            <a class="btn btn-lg btn-primary" href="/greeting" role="button">Saludos</a>
            <a class="btn btn-lg btn-primary" href="/movies" role="button">Peliculas</a>
            <a class="btn btn-lg btn-primary" href="/movies/show/10" role="button">Pelicula ?</a>
            <a class="btn btn-lg btn-primary" href="/movies/create/" role="button">Agregar Pelicula</a>
            <a class="btn btn-lg btn-primary" href="/movies/edit/10" role="button">Modificar Pelicula</a>
            <a class="btn btn-lg btn-primary" href="/movies/delete/3" role="button">Borrar Pelicula</a>
        </div>  
        <footer class="info">
            <p><b>Actividad 3.2. Estilos con Bootstrap | Materia: Conceptualización de entornos de desarrollo de aplicaciones y servicios | Alumno: Karina Guadalupe Barragán Jara | Codigo alumno: 304180712 | Correo de contacto: kbarragan725@gmail.com</b></p>
        </footer>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>

</html>
<?php /**PATH C:\xampp\htdocs\catalogo\resources\views/welcome.blade.php ENDPATH**/ ?>