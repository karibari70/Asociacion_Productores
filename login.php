<?php
<<<<<<< HEAD
session_start();

$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

if($usuario == "admin" && $contraseña == "1234") {
    $_SESSION['usuario'] = $usuario;
    header('Location: foro_admin.php');
} else {
    header('Location: foro.php?error=1');
}



=======
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
>>>>>>> 51cf2cccf218ab8dea900378b07a7770d10d5602
