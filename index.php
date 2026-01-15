<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php get y post</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="contenedor">
        <header class="encabezado">
            <h1>Navega en el sitio o llena la Informacion</h1>
        </header>

        <section class="tarjeta">
                <div class="nav">
                <a class="btn" href="recibir_get.php?seccion=Inicio">Inicio</a>
                <a class="btn" href="recibir_get.php?seccion=Unidades">Unidades</a>
                <a class="btn" href="recibir_get.php?seccion=Contacto">Contacto</a>
            </div>

            <div class="mini">
                <div class="mini-item">
                    <h3>Inicio</h3>
                    <p>La idea del sitio es practicar get y post.</p>
                </div>
                <div class="mini-item">
                    <h3>Unidades</h3>
                    <p>Una lista breve de temas vistos en clase.</p>
                </div>
                <div class="mini-item">
                    <h3>Contacto</h3>
                    <p>Información general para llamar a numeros de contato.</p>
                </div>
            </div>
        </section>

        <section class="tarjeta">
            <h2>FORMULARIO</h2>
            <p>Completa los datos para envíalos al servidor.</p>

            <form class="formulario" method="POST" action="recibir_post.php">
                <div class="fila">
                    <div class="campo">
                        <label>Nombre</label>
                        <input type="text" name="nombre" required>
                    </div>
                    <div class="campo">
                        <label>Apellido</label>
                        <input type="text" name="apellido" required>
                    </div>
                </div>

                <div class="fila">
                    <div class="campo">
                        <label>Edad</label>
                        <input type="number" name="edad" min="1" max="120" required>
                    </div>
                    <div class="campo">
                        <label>Correo</label>
                        <input type="email" name="correo" required>
                    </div>
                </div>

                <button class="btn btn-enviar" type="submit">Enviar</button>
            </form>

        </section>

        <footer class="pie">
            <p>DEBER PHP UNIDAD 4 SEMANA 11</p>
        </footer>
    </div>

</body>

</html>
