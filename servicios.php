<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <link rel="stylesheet" href="estilos.css">
    <script src="https://kit.fontawesome.com/b57b11971d.js" crossorigin="anonymous"></script>
</head>

<body>

    <button class="boton-flotante"></button>

    <?php require 'navbar.php' ?>

    <h1>Servicios</h1>

    <div class="contenedor4">

        <div class="text2">

            <p>Desde que conformamos la Asociación, hemos podido acceder a maquinaria a partir de programas de apoyo nacionales o provinciales , equipos que no hubiéramos podido adquirir de manera individual, por su alto costo y, además, sería un capital improductivo en gran parte del año; en cambio el uso compartido lo ha hecho posible, abonando una tarifa a modo de alquiler por el uso , que cubre costos y amortizaciones.</p>
        </div>
        <div class="img3">
            <img src="Media/Imagen quienes somos 1.jpeg" alt="productores1" width=100% />
        </div>
    </div>

    <div class="contenedor5">


        <div class="button1">
            <a href="PARQUE DE MAQUINARIAS (1).pdf" target="_blank">
                <button>Ver aquí nuestro PARQUE DE MAQUINARIA </button></a>
        </div>
    </div>

    <div class="contacto">

        <h1 class="linea"><span><i class="fa-duotone fa-solid fa-handshake-simple"></i>Contáctenos<i class="fa-duotone fa-solid fa-handshake-simple"></i></span></h1>
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

    <?php require 'footer.php'?>
</body>

</html>