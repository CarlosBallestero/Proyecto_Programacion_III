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
        <iframe class="col-md-10" 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.8796672413973!2d-84.15293699020442!3d9.94396897395695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0fb698e1ba15b%3A0x781267d196d66afc!2sMultiplaza%20Escaz%C3%BA!5e0!3m2!1ses-419!2scr!4v1712539574799!5m2!1ses-419!2scr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <iframe class="col-md-10"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.2710462382374!2d-84.1338499902038!3d9.994455073090494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0fae4d6f2f3c9%3A0xca979eb2e17fba1d!2sCentro%20Comercial%20Ox%C3%ADgeno!5e0!3m2!1ses-419!2scr!4v1712540780892!5m2!1ses-419!2scr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


</main>

<?php include "shared/footer.php" ?>