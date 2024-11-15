<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="logout.css">
    <title>Desconectando...</title>
</head>
<body>
    <div class="contenedor_desconexion">
        <div class="mensaje">
            <h2>Te estás desconectando</h2>
        </div>
        <div class="imagen_desconexion">
            <img src="media/logo_navbar.png" alt="Desconexión">
        </div>
    </div>
</body>
</html>

<?php
header("refresh:2; url=foro.php");
?>