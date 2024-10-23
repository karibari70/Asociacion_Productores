<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="foro.css">
    <title>Foro de Preguntas</title>
</head>
    <?php require 'navbar.php' ?>

<body>

        <!-- Preguntas recientes a la derecha -->
        <div class="questions-container">
            <h2>Preguntas Recientes</h2>
            <!-- Aquí se mostrarán las preguntas -->
            <?php
            // Conexión a la base de datos
            require 'conexion.php';
            // Consulta para obtener las preguntas más recientes
            $sql = "SELECT * from foro";
            $result = $conn->query($sql);

            // Mostrar las preguntas
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $fechaFormateada = date("d/m/Y", strtotime($row['fecha'])); 
                    echo "<div class='question'>";
                    echo "<h4>" . $row['nombre'] . "</h4>";
                    echo "<p>" . $row['pregunta'] . "</p>";
                    echo "<small>Publicado el $fechaFormateada </small>";
                    echo "</div>";
                    // echo $row['nombre'];
                    // echo $row['pregunta'];
                    // echo $row['nombre'];

                }
            } else {
                echo "<p>No hay preguntas aún. Sé el primero en preguntar.</p>";
            }

            ?>
        </div>
    </div>

    <?php require 'footer.php' ?>

</body>
</html>