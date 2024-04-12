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
            <label for="nombre">Cédula</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="metros" id="metros" placeholder="Duración">
            <label for="duracion">Contraseña</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="ubicacion" id="ubicacion" placeholder="Duración">
            <label for="duracion">Nombre</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="precio" id="precio" placeholder="Director">
            <label for="director">Primer Apellido</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="detalles" id="detalles" placeholder="Director">
            <label for="director">Segundo Apellido</label>
        </div>
        <div class="form-floating mb-3">
            <input type="file" class="form-control" name="imagen" id="imagen" placeholder="imagen">
            <label for="imagen">Correo</label>
        </div>
        <div class="form-floating mb-3">
            <input type="file" class="form-control" name="imagen" id="imagen" placeholder="imagen">
            <label for="imagen">Fecha de nacimiento</label>
        </div>
        <div class="form-floating mb-3">
            <input type="file" class="form-control" name="imagen" id="imagen" placeholder="imagen">
            <label for="imagen">Teléfono</label>
        </div>
        <div class="form-floating mb-3">
            <input type="file" class="form-control" name="imagen" id="imagen" placeholder="imagen">
            <label for="imagen">Número de WhatsApp</label>
        </div>
        <!-- <div class="form-floating mb-3">
            <input type="file" class="form-control" name="imagen" id="imagen" placeholder="imagen">
            <label for="imagen">Fotografía</label>
        </div> -->
        <div class="mb-3">
            <button id="guardar" type="button" class="btn btn-outline-dark" data-metodo="agregar">Guardar</button>
            <button id="cancelar" type="reset" class="btn btn-outline-dark">Cancelar</button>
        </div>
    </form>