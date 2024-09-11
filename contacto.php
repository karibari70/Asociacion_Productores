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
            <img  src="Media/icons8-whatsapp-128.png" alt="whatsapp--v1" /></a>
        <a href="mailto:asociaciondeproductoresdeelhoyo@gmail.com" target=_blank>
            <img src="Media/icons8-correo-94.png" alt="mail" /> </a>

        <!-- <img width="48" height="48" src="Media/icons8-whatsapp-128.png" alt="whatsapp--v1" />
        <span>+542944114644 </span>


        <img width="48" height="48" src="Media/icons8-correo-94.png" alt="mail" />
        <a href="mailto:asociaciondeproductoresdeelhoyo@gmail.com" class="text_mail" target=_blank> asociaciondeproductoresdeelhoyo@gmail.com</a> -->

    </div>

    <div class="formulario">
        <h1>Envie su consulta</h1>
        <form method="post" action='datos.php'>

            <div class="datos_form">Nombre y Apellido</div>
            <input type="text" name="name"  required /><br>

            <div class="datos_form">Correo Electrónico</div>
            <input type="email" name="email"  required /><br>
            <div> Su mensaje</div>

            <textarea rows="3" cols="50" maxlength="150" ></textarea>


            <button type="submit">Enviar Formulario</button>
        </form>
    </div>

    <?php require 'footer.php' ?>

</body>

</html>