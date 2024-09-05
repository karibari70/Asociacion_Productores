<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
<?php require 'navbar.php' ?>

    <div class="contenedor_contacto">
        <img src="Media/Imagen10.jpg" alt="maquina" class="img_contacto">
        <div class="texto_contacto">
            <h1>Contacto</h1>
        </div>
    </div>
    <div class="icon_contacto">
        <a href=" https://wa.me/542944114644 " target=_blank>
            <img width="48" height="48" src="Media/icons8-whatsapp-128.png" alt="whatsapp--v1" /></a>
        <a href="mailto:asociaciondeproductoresdeelhoyo@gmail.com" target=_blank>
            <img width="48" height="48" src="Media/icons8-correo-94.png" alt="mail" /> </a>
    </div>

    <div class="formulario">
        <form method="post" action='datos.php'>

            <div>Nombre y Apellido:</div>
            <input type="text" name="name" placeholder="Nombre y Apellido " required /><br>

            <div>Correo Electronico:</div>
            <input type="email" name="email" placeholder="ejemplo@ejemplo.com" required /><br>
            <div> Su mensaje:</div>

            <textarea rows="3" cols="50" maxlength="150" placeholder="Escribe tu mensaje aqui"></textarea>


            <button type="submit">Enviar Formulario</button>
        </form>
    </div>

    <?php require 'footer.php' ?>

</body>

</html>