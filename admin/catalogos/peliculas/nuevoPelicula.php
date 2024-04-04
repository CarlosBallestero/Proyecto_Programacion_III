<!-- Para enviar archivos es obligatorio el method="POST" y el enctype="multipart/form-data"-->
<form id="frmPelicula" class="w-40 m-auto mx-5 my-5" action="" method="GET" enctype="multipart/form-data">
    <input type="hidden" id="id" name="id">    
    <div class="d-flex justify-content-center bd-highlight mb-3">
            <div class="p-2 bd-highlight">
                <a href="index.php?page=peliculas" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Regresar</a>
            </div>

            <div class="me-auto p-2 bd-highlight ">
                <h2>Catálogo Peliculas
            </div>

        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
            <label for="nombre">Nombre</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="sinopsis" id="sinopsis" placeholder="Duración">
            <label for="duracion">Sinopsis</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="duracion" id="duracion" placeholder="Duración">
            <label for="duracion">Duración</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="director" id="director" placeholder="Director">
            <label for="director">Director</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="genero" id="genero" placeholder="Director">
            <label for="director">Género</label>
        </div>
        <div class="form-floating mb-3">
            <input type="file" class="form-control" name="imagen" id="imagen" placeholder="imagen">
            <label for="imagen">Imagen</label>
        </div>

        <div class="mb-3">
            <button id="guardar" type="button" class="btn btn-outline-dark">Guardar</button>
            <button id="cancelar" type="reset" class="btn btn-outline-dark">Cancelar</button>
        </div>
    </form>