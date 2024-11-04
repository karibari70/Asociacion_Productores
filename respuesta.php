<?php
require 'conexion.php';

    $respuesta = $_POST['respuesta'];

    $sql = "INSERT INTO foro(respuesta) VALUES ('$respuesta')";
    $result = $conn->query($sql);

    header("Location: foro_admin.php");
    exit();

?>