<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: index_loguin.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>


    <h1>Bienvenido <?php echo $_SESSION['usuario'] ?> </h1>

    <a href="logout.php">Desconectarse</a>
</body>

</html>