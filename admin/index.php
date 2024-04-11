  <?php
  require "shared/dashEncabezado.php";
  $page = isset($_GET["page"]) ? $_GET["page"] : "";

  ?>

  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <?php

    switch ($page) {
      case 'usuario':
        $titulo = "Catálogo Usuarios";
        break;
      case 'peliculas':
        $titulo = "Catálogo Casas";
        require "catalogos/datos/listCasas.php";
        break;
      // case 'horarios':
      //   $titulo = "Catálogo Horarios";
      //   break;
      // case 'banners':
      //   $titulo = "Catálogo Banners";
      //   break;
      case 'nuevoCasa':
        $titulo = "Nueva Casa";
        require "catalogos/datos/nuevoCasa.php";
        break;
      default:
        $titulo = "Bienvenido";
        break;
    }


    ?>
  </main>

  <?php require "shared/dashPie.php" ?>