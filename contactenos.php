<?php include "shared/header.php" ?>

<main class="row justify-content-center">
    <div class="col-md-4">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nombre" name="nombre">
            <label for="nombre">Nombre</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" name="email">
            <label for="email">Email</label>
        </div>
        <div class="mb-3">
            <label for="asunto">Asunto</label>
            <select id="asunto" name="asunto" class="form-select">
                <option value="1">Pregunta</option>
                <option value="2">Cotización</option>
                <option value="3">Garantía</option>
            </select>
        </div>
        <div class=" mb-3">
            <label for="mensaje">Email</label>
            <textarea class="form-control" id="mensaje" name="mensaje" cols="30" rows="10"></textarea>
        </div>
        <div class=" mb-3">
            <button class="btn btn-rojo">Guardar</button>
        </div>
    </div>
    <iframe class="col-md-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.4170337348432!2d-84.07106468896608!3d9.899181690160228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e3035ccd6865%3A0x752002c761e99e19!2sCin%C3%A9polis%20Desamparados!5e0!3m2!1ses-419!2scr!4v1707880271038!5m2!1ses-419!2scr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <iframe width="1280" height="720" src="https://www.youtube.com/embed/rmoneJ_797s" title="Godzilla y Kong: El nuevo imperio | Tráiler Oficial | Doblado" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</main>

<?php include "shared/footer.php" ?>