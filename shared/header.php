<?php
// obtner el nombre del archivo que se abre
$url = basename($_SERVER["PHP_SELF"], ".php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Tare Blanco Gutiérrez, Carlos Ballestero, Yessenia Umaña Cervantes">
    <meta name="description" content="Página principal de Bienes Raices">
    <meta name="keywords" content="restaurante, comida china, china">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Primer Sitio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/<?php echo $url ?>.css">
</head>

<body class="container-fluid">

    <header class="bg-azul">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="img/Logo proyecto.png" alt="Logo de la empresa" width="80">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                            <a class="nav-link" href="iniciodesesion.php">Inicio de Sesión</a>
                        </li>
                    <li class="nav-item">
                            <a class="nav-link" href="registro.php">Registrarse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="acerca.php">Aun te interesa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="servicios.php">¿Por qué elegirnos?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactenos.php">Nuestras propiedades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="testimonios.php">Testimonios</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mapa.php">Mapa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactenos.php">Contáctenos</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Crud
                            </a>
                            <ul class="dropdown-menu bg-azul">
                                <li><a class="dropdown-item" href="listadoBanners.php">Banner</a></li>
                                <li><a class="dropdown-item" href="peliculas.php">Peliculas</a></li>
                                <li><a class="dropdown-item" href="horarios.php">Horarios</a></li>
                            </ul>
                        </li> -->
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn btn btn-rojo" type="submit">Buscar</button>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
    </header>