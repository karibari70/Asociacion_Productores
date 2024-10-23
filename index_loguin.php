<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="index_loguin.css">
</head>

<body>

    ><div class="formulario_login">
        <form action="login.php" method="post">
            <?php
            if (isset($_GET['error'])) {
                echo "<p style='color:red'>Error de contraseña o usuario</p>";
            }
            ?>

            <label>Usuario</label>
            <input type="text" name="usuario" required />
            <label>Contraseña</label>
            <input type="text" name="contraseña"><br>
            <input type="submit">
    </div>
    </form>
</body>

</html