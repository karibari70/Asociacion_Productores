<?php
session_start();

if(!isset($_SESSION['usuario'])) {
    header('Location: index_loguin.php');
    exit();
}

?>

<h1>Bienvenido <?php echo $_SESSION['usuario']?> </h1>

<a href="logout.php">Desconectarse</a>