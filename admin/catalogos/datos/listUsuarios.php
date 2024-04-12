<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<h2 class="my-5 mx-5"><?php echo $titulo ?></h2>
<div class="container">
    <div class="d-flex bd-highlight mb-3">
        <div class="me-auto p-2 bd-highlight">

        </div>
        <div class="p-2 bd-highlight">

            <a href="index.php?page=nuevoUsuario" class="btn btn-secondary"><i class="fas fa-plus"></i> Nuevo</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Cédula</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Primer Apellido</th>
                    <th scope="col">Segundo Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Número de WhatsApp</th>
                </tr>
            </thead>
            <tbody id="datosTabla">

            </tbody>
        </table>
        <script src="js/listUsuarios.js"></script>
    </div>
</div>