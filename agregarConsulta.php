<?php
    require 'conexion.php';

    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $pregunta = $_POST['pregunta'];
    $fecha = date('Y-m-d');

    $sql = "INSERT INTO foro(correo,nombre,pregunta,fecha) VALUES ('$correo','$nombre','$pregunta','$fecha')";
    $result = $conn->query($sql);

    header('Location: foro.php');