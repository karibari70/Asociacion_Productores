<?php

/* 
    Este archivo seria igual a notas.php
    Tenemos primero que soliticar la conexion

    ej:

        require 'conexion.php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $titulo = $_POST['titulo'];
        $notas = $_POST['notas'];
        $autor = $_POST['autor'];

    Aqui va el nombre de tabla de la productora con los valores del formulario

    $sql = "INSERT INTO notas (titulo, notas, autor) VALUES ('$titulo','$notas','$autor')";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "Nota creada con exito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


// Consulta para obtener todos los formularios, reemplaar valores

$sql = "SELECT * from notas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h2>" . $row['titulo'] . "</h2>";
        echo "<p>" . $row['notas'] . "</p>";
        echo "<p>" . $row['autor'] . "</p>";
        echo "<a href='editar.php?id=" . $row['id'] . "'>Editar</a>";
        echo "</div><hr>";
    }
} else {
    echo "No hay notas disponibles";
}
$conn->close();


*/