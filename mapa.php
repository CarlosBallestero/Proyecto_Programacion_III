<?php include "shared/header.php" ?>

<main class="row justify-content-center">
    
<div class="col-md-4">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nombre" name="nombre">
            <label for="nombre">Nombre</label>
        </div>
    <div class="col-md-4">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nombre" name="nombre">
            <label for="nombre">Teléfono</label>
        </div>
        <div class="mb-3">
            <label for="asunto">Oficinas</label>
            <select id="asunto" name="asunto" class="form-select">
                <option value="1">San José</option>
                <option value="2">Heredia</option>
            </select>
        </div>
        <div class=" mb-3">
            <button class="btn btn-rojo">Guardar</button>
        </div>
    </div>
    <iframe class="col-md-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.4170337348432!2d-84.07106468896608!3d9.899181690160228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e3035ccd6865%3A0x752002c761e99e19!2sCin%C3%A9polis%20Desamparados!5e0!3m2!1ses-419!2scr!4v1707880271038!5m2!1ses-419!2scr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


</main>

<?php include "shared/footer.php" ?>