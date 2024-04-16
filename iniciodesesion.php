<?php include "shared/header.php" ?>
<main>
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Usuario (cédula)</label>
    <input type="email" class="form-control" id="cedula" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">No comparta sus datos con nadie más.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="contraseña">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Recuérdame</label>
  </div>
  <button id="inicio" type="button" class="btn btn-primary">Iniciar sesión</button>
</form>

<script src="js/iniciarSesion.js"></script>
</main>
<?php include "shared/footer.php" ?>