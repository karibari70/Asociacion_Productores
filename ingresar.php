<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ingresar.css">
    <title>Ingresar</title>
</head>
<body>
    <div class="contenedor_login">
        <div class="caja_login">
            <div class="login_form">
                <h2>INGRESAR</h2>
                <form method="post" action="login.php">
                    <?php
                    if (isset($_GET['error'])) {
                        echo "<p style='color:red'>Error en validación<p>";
                    }
                    ?>
                    <div class="datos">
                        <input name="usuario" type="text" required placeholder="Usuario">

                    </div>
                    <div class="datos">
                        <input name="contraseña" type="password" required placeholder="Contraseña">

                    </div>
                    <button type="submit">Enviar</button>
                </form>
            </div>
            <div class="imagen_login">
                <img src="media/logo_navbar.png" alt="Login Image">
            </div>
        </div>
    </div>
</body>
</html>




