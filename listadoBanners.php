<?php include "shared/header.php" ?>

<main>

    <section class="row justify-content-evenly">
        <h2 class="col-sm-12">Catálogo Banners</h2>
        <div class="col-sm-12">
            <button class="btn btn-success">Nuevo</button>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Estado</th>
                    <th>Acciones</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Logan</td>
                    <td><img class="imgListado" src="img/estreno2.png" alt=""></td>
                    <td>Si</td>

                    <td>
                        <button class="btn btn-primary">Modificar</button>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>


    </section>



</main>

<?php include "shared/footer.php" ?>