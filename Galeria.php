<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Galeria</title>
</head>
<body>

    <button class="boton-flotante"></button>

    <?php require 'navbar.php' ?>
    <div class="presentacion">
        <div class="img1">
            <div class="conten-imagen">
                <img src="Media/Equipo_1-Galería.jpg" alt="Equipo de Trabajo" width=100% />
                <div class="txt-sobrepuesto">Equipo de Trabajo</div>
            </div>
        </div>
        <br><br>
        <div class="img1">
            <img src="Media/Equipo_2-Galería.jpg" alt="Equipo de Trabajo" width="100%">
        </div>
        <br><br>
        <div class="img1">
            <div class="conten-imagen">
                <img src="Media/Grua_1-Galeria.jpg" alt="Trabajo con Grua" width=100% />
                <div class="txt-sobrepuesto">Con qué trabajamos</div>
            </div>
        </div>
        <br><br>
        <div class="img1">
            <img src="Media/Maquinaria-Galería.jpg" alt="Tractores y Cosechadoras" width=100% />
        </div>
        <br><br>
        <div class="img1">
            <img src="Media/Grua_2-Galería.jpg" alt="Trabajo con Grua" width=100% />
        </div>
    </div>

    <?php require 'footer.php'?>
</body>
</html>