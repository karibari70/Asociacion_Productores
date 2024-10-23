<?php
// guardar la informacion en el explorador
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    if ($usuario == 'admin' && $contraseña == '1234') {
        // Guardamos dato en la sesion
        $_SESSION['usuario'] = $usuario;
        header('Location: home.php');
    } else {
        // usamos el metodo get
        header('Location: index_loguin.php?error=1');
    }
}
