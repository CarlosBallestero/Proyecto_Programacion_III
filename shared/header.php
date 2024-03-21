<!DOCTYPE html>
<html lang="en">

<head>
    <!-- -->
    <meta charset="UTF-8">
    <meta name="author" content="Carlos Ballestero">
    <meta name="description" content="Página principal de .....">
    <meta name="keywords" content="restaurante, comida china, china">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Primer Sitio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-orange">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.jpg" alt="Logo de la empresa" width="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="acerca.php">Acerca</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Servicios</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Crud
                            </a>
                            <ul class="dropdown-menu bg-orange">
                                <li><a class="dropdown-item" href="listadoBanners.php">Banners</a></li>
                                <li><a class="dropdown-item" href="#">Peliculas</a></li>
                                <li><a class="dropdown-item" href="#">Horarios</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
