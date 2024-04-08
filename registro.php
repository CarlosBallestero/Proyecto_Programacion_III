<?php include "shared/header.php"; ?>
<main>
<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-2">
    <label for="validationCustom01" class="form-label">Cédula</label>
    <input type="text" class="form-control" id="validationCustom01" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Contraseña</label>
    <input type="text" class="form-control" id="validationCustom02" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    </div>
    <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="validationCustom02" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    </div>
    <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="validationCustom02" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    </div>
    <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Correo Electrónico</label>
    <input type="text" class="form-control" id="validationCustom02" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    </div>
    <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Fecha de nacimiento</label>
    <input type="text" class="form-control" id="validationCustom02" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    </div>
    <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Teléfono</label>
    <input type="text" class="form-control" id="validationCustom02" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    </div>
    <div class="col-md-2">
    <label for="validationCustom02" class="form-label">WhatsApp</label>
    <input type="text" class="form-control" id="validationCustom02" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    </div>
    <div class="mb-3">
  <label for="formFile" class="form-label">Default file input example</label>
  <input class="form-control" type="file" id="formFile">
</div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Acepta los términos y condiciones
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Registrar usuario</button>
  </div>
</form>
</main>
<?php include "shared/footer.php";?>