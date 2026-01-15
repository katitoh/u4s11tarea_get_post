<?php
$nombre = $_POST["nombre"] ?? "";
$apellido = $_POST["apellido"] ?? "";
$edad = $_POST["edad"] ?? "";
$correo = $_POST["correo"] ?? "";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="contenedor">
        <header class="encabezado">
            <p>Estos datos fueron enviados desde el formulario.</p>
        </header>

        <section class="tarjeta">
            <div class="resultado">
                <p><strong>Nombre:</strong> <?= $nombre ?></p>
                <p><strong>Apellido:</strong> <?= $apellido ?></p>
                <p><strong>Edad:</strong> <?= $edad ?></p>
                <p><strong>Correo:</strong> <?= $correo ?></p>
            </div>

            <div class="linea"></div>
            <div class="acciones">
                <a class="btn" href="index.php">Volver</a>
            </div>
        </section>
    </div>
</body>

</html>
