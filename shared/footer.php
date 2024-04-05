 <!-- 
        telefonos 1 columna x fila 
        tablet 2 - 3 columna x fila
        pc 3+ columna fila
    -->
 <footer class="row text-center bg-azul">
     <div class="col-md-6 col-lg-4">
         <img src="img/Logo Proyecto.png" alt="Logo de la empresa" width="60">
     </div>
     <div class="col-md-6 col-lg-4">Enlaces</div>
     <div class="col-md-6 col-lg-4">Redes Sociales</div>
 </footer>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
 </script>

 <?php
    /*if ($url == "listadoBanners") {
    echo `<script src="js/catalagoPeliculas.js"></script>`;
    }*/

    ?>

 <?php if ($url == "listadoBanners") { ?>
     <script src="js/catalagoPeliculas.js"></script>
 <?php } ?>

 
 </body>

 </html>