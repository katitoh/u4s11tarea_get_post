<?php
$seccion = $_GET["seccion"] ?? "No definido";

$datos = [
    "Inicio" => [
        "titulo" => "INICIO",
        "texto" => "Bienvenido. Esta página demuestra cómo navegar entre secciones."
    ],
    "Unidades" => [
        "titulo" => "UNIDADES",
        "texto" => "Unidad 1: HTML. Unidad 2:CSS. Unidad 3: JAVASCRIPT. Unidad 4: PHP."
    ],
    "Contacto" => [
        "titulo" => "CONTACTO",
        "texto" => "Si quieres información adicional, puedes utilizar el formulario de contacto del sitio para enviar tus datos."
    ]
];

$titulo = $datos[$seccion]["titulo"] ?? "seleccion no valida";
$texto = $datos[$seccion]["texto"] ?? "Error no tiene seleccion valida.";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibir GET</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="contenedor">
        <section class="encabezado">
            <h2 class="titulo-seccion"><?= $titulo ?></h2>
            <p class="texto-seccion"><?= $texto ?></p>
            <div class="linea"></div>
            <div class="acciones">
                <a class="btn" href="index.php">Volver</a>
            </div>
        </section>
    </div>
</body>

</html>
