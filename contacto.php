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
            <img src="Media/icons8-whatsapp-128.png" alt="whatsapp--v1" /></a>
        <a href="mailto:asociaciondeproductoresdeelhoyo@gmail.com" target=_blank>
            <img src="Media/icons8-correo-94.png" alt="mail" /> </a>

        <!-- <img width="48" height="48" src="Media/icons8-whatsapp-128.png" alt="whatsapp--v1" />
        <span>+542944114644 </span>


        <img width="48" height="48" src="Media/icons8-correo-94.png" alt="mail" />
        <a href="mailto:asociaciondeproductoresdeelhoyo@gmail.com" class="text_mail" target=_blank> asociaciondeproductoresdeelhoyo@gmail.com</a> -->

    </div>

    <div class="ubicación">
        <h1>UBICACIÓN</h1>
        <!-- <form method="post" action='datos.php'>

            <div class="datos_form">Nombre y Apellido</div>
            <input type="text" name="name"  required /><br>

            <div class="datos_form">Correo Electrónico</div>
            <input type="email" name="email"  required /><br>
            <div> Su mensaje</div>

            <textarea rows="3" cols="50" maxlength="150" ></textarea>


            <button type="submit">Enviar Formulario</button>
        </form> -->
        
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4980.009206172155!2d-71.49390507531149!3d-42.08323860753793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x961b9380f9313277%3A0xf6cdda059791bc40!2sAsociaci%C3%B3n%20De%20Productores%20De%20El%20Hoyo!5e0!3m2!1ses!2sar!4v1730417529827!5m2!1ses!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <?php require 'footer.php' ?>

</body>

</html>