<?php
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $id = $_POST['id'];
    $respuesta = $_POST['respuesta'];

    // Escapar los datos para evitar inyección SQL
    $id = $conn->real_escape_string($id);
    $respuesta = $conn->real_escape_string($respuesta);

    // Actualizar la respuesta en la base de datos
    $sql = "UPDATE foro SET respuestas='$respuesta' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Respuesta guardada correctamente.";
        // Redirigir a la página anterior o mostrar un mensaje de éxito
        header("Location: foro_admin.php"); // Cambia esto a tu página principal o de foro
        exit();
    } else {
        echo "Error al guardar la respuesta: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
