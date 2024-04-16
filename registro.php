<?php include "shared/header.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<main>
<form id="frmUsuarios" class="row g-3 needs-validation" novalidate>
<input type="hidden" id="id" name="id">  
<div class="col-md-2">
    <label for="validationCustom01" class="form-label">Cédula</label>
    <input type="text" class="form-control" name="cedula" id="cedula" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Contraseña</label>
    <input type="text" class="form-control" name="contraseña" id="contraseña" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    </div>
    <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    </div>
    <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Primer Apellido</label>
    <input type="text" class="form-control" name="primerApellido" id="primerApellido" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    </div>
    <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Segundo Apellido</label>
    <input type="text" class="form-control" name="segundoApellido" id="segundoApellido" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    </div>
    <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Correo Electrónico</label>
    <input type="text" class="form-control" name="correo" id="correo" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    </div>
    <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Fecha de nacimiento</label>
    <input type="text" class="form-control" name="fechaNacimiento" id="fechaNacimiento" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    </div>
    <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Teléfono</label>
    <input type="text" class="form-control" name="telefono" id="telefono" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    </div>
    <div class="col-md-2">
    <label for="validationCustom02" class="form-label">WhatsApp</label>
    <input type="text" class="form-control" name="numeroWA" id="numeroWA"id="validationCustom02" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    </div>
    <div class="mb-3">
  <label for="formFile" class="form-label">Default file input example</label>
  <input class="form-control" type="file" id="formFile">
</div>
  <!-- <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Acepta los términos y condiciones
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div> -->
  <div class="col-12">
    <button id="guardar" type="button"  class="btn btn-primary" data-metodo="agregar">Registrar usuario</button>
  </div>
</form>
</main>

<script src="admin\js\guardarUsuarios.js"></script>

<?php include "shared/footer.php";?>