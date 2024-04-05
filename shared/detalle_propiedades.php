<?php
include "shared/header.php"; // Incluir el encabezado de la página
include "functions.php"; // Incluir archivo de funciones

// Supongamos que tienes una función llamada obtenerDetallesPropiedad($id_propiedad) en functions.php que devuelve un arreglo con los detalles de la propiedad.
// Aquí obtendremos los detalles de la propiedad según el ID que recibimos a través de la URL
$id_propiedad = isset($_GET['id_propiedad']) ? $_GET['id_propiedad'] : 0;
$detalles_propiedad = obtenerDetallesPropiedad($id_propiedad);
?>

<main>
    <div class="container">
        <!-- Galería de imágenes -->
        <div class="gallery">
            <?php foreach ($detalles_propiedad['imagenes'] as $imagen) { ?>
                <img src="<?php echo $imagen; ?>" alt="Imagen de la propiedad">
            <?php } ?>
        </div>

        <!-- Detalles de la propiedad -->
        <h2><?php echo $detalles_propiedad['nombre']; ?></h2>
        <p><strong>Dirección:</strong> <?php echo $detalles_propiedad['direccion']; ?></p>
        <p><strong>Precio:</strong> <?php echo $detalles_propiedad['precio']; ?></p>
        <p><strong>Cuartos:</strong> <?php echo $detalles_propiedad['cuartos']; ?></p>
        <p><strong>Baños:</strong> <?php echo $detalles_propiedad['banos']; ?></p>
        <p><strong>Cocheras:</strong> <?php echo $detalles_propiedad['cocheras']; ?></p>

        <!-- Información del vendedor (visible solo si el usuario ha iniciado sesión) -->
        <?php if (usuarioHaIniciadoSesion()) { ?>
            <p><strong>Teléfono:</strong> <?php echo $detalles_propiedad['telefono']; ?></p>
            <p><strong>WhatsApp:</strong> <?php echo $detalles_propiedad['whatsapp']; ?></p>
            <p><strong>Correo:</strong> <?php echo $detalles_propiedad['correo']; ?></p>
        <?php } ?>

        <!-- Código QR con enlace a la propiedad -->
        <img src="generar_qr.php?id_propiedad=<?php echo $id_propiedad; ?>" alt="Código QR">
    </div>
</main>

<?php include "shared/footer.php"; ?>