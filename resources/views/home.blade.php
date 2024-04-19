<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
<body background="https://img2.rtve.es/v/5569470/">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand me-5" href="">BookStore</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="btn btn-outline-light btn-lg me-3" href="categoria.html" id="navbarNavDarkDropdown" role="button" data-bs-toggle="" aria-expanded="false">
                  Categoria
                </a>
                
                <a class="btn btn-outline-light btn-lg me-3" href="libro.html" id="navbarNavDarkDropdown" role="button" data-bs-toggle="" aria-expanded="false">
                  Libro
                </a>

                <a class="btn btn-outline-light btn-lg me-3" href="prestamo.html" id="navbarNavDarkDropdown" role="button" data-bs-toggle="" aria-expanded="false">
                  Prestamo
                </a>
    <div class="btn-group">
    <button type="button" class="btn btn-outline-success dropdown-toggle btn-lg me-5" data-bs-toggle="dropdown" aria-expanded="false">
        Usuario
    </button>
    <ul class="dropdown-menu dropdown-menu-dark">
        <li><a class="dropdown-item" href="Modificacion.html">Modificar</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="{{ url('/login') }}">Cerrar sesión</a></li>
    </ul>
    </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <a class="dropdown-item" href="{{ url('/about') }}">Grupo de trabajo</a>
</body>
</html>