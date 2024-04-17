<!-- Para enviar archivos es obligatorio el method="POST" y el enctype="multipart/form-data"-->
<form id="frmCasas" class="w-40 m-auto mx-5 my-5" action="" method="GET" enctype="multipart/form-data">
    <input type="hidden" id="id" name="id">    
    <div class="d-flex justify-content-center bd-highlight mb-3">
            <div class="p-2 bd-highlight">
                <a href="index.php?page=peliculas" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Regresar</a>
            </div>

            <div class="me-auto p-2 bd-highlight ">
                <h2>Catálogo Casas</h2>
            </div>

        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
            <label for="nombre">Nombre</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="metros" id="metros" placeholder="Duración">
            <label for="duracion">Metros cuadrados</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="ubicacion" id="ubicacion" placeholder="Duración">
            <label for="duracion">Ubicación</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="precio" id="precio" placeholder="Director">
            <label for="director">Precio</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="detalles" id="detalles" placeholder="Director">
            <label for="director">Detalles</label>
        </div>
        <!-- <div class="form-floating mb-3">
            <input type="file" class="form-control" name="imagen" id="imagen" placeholder="imagen">
            <label for="imagen">Imagen</label>
        </div> -->

        <div class="mb-3">
            <button id="guardar" type="button" class="btn btn-outline-dark" data-metodo="agregar">Guardar</button>
            <button id="cancelar" type="reset" class="btn btn-outline-dark">Cancelar</button>
        </div>
    </form>