<!-- Para enviar archivos es obligatorio el method="POST" y el enctype="multipart/form-data"-->
<form id="frmUsuarios" class="w-40 m-auto mx-5 my-5" action="" method="GET" enctype="multipart/form-data">
    <input type="hidden" id="id" name="id">
    <div class="d-flex justify-content-center bd-highlight mb-3">
        <div class="p-2 bd-highlight">
            <a href="index.php?page=usuario" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Regresar</a>
        </div>

        <div class="me-auto p-2 bd-highlight ">
            <h2>Catálogo Usuarios</h2>
        </div>

    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Nombre">
        <label for="cedula">Cédula</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="contraseña" id="contraseña" placeholder="Duración">
        <label for="contraseña">Contraseña</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Duración">
        <label for="nombre">Nombre</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="primerApellido" id="primerApellido" placeholder="Director">
        <label for="primerApellido">Primer Apellido</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="segundoApellido" id="segundoApellido" placeholder="Director">
        <label for="segundoApellido">Segundo Apellido</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="correo" id="correo" placeholder="Director">
        <label for="correo">Correo</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="fechaNacimiento" id="fechaNacimiento" placeholder="Director">
        <label for="fechaNacimiento">Fecha de Nacimiento</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Director">
        <label for="telefono">Teléfono</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="numeroWA" id="numeroWA" placeholder="Director">
        <label for="numeroWA">Número de WhatsApp</label>
    </div>
    <div class="form-floating mb-3">
        <!-- <div class="form-floating mb-3">
            <input type="file" class="form-control" name="imagen" id="imagen" placeholder="imagen">
            <label for="imagen">Fotografía</label>
        </div> -->
        <div class="mb-3">
            <button id="guardar" type="button" class="btn btn-outline-dark" data-metodo="agregar">Guardar</button>
            <button id="cancelar" type="reset" class="btn btn-outline-dark">Cancelar</button>
        </div>
</form>

<script src="js/guardarUsuarios.js"></script>