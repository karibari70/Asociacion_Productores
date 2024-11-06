<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="foro.css">
    <title>Foro de Preguntas</title>
</head>
    <?php require 'navbar.php' ?>

    <?php
    session_start();
    if(!isset($_SESSION['usuario'])) {
        header('Location: index.php');
    }

    echo "<h1>Bienvenido " . $_SESSION['usuario'] . "</h1>";

?>

<body>

        <div class="questions-container">
            <h2>Preguntas Recientes</h2>
            <?php
            require 'conexion.php';
            $sql = "SELECT * from foro";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $fechaFormateada = date("d/m/Y", strtotime($row['fecha'])); 
                    $id = $row['id'];
                    echo "<div class='question'>";
                    echo "<h4>" . $row['nombre'] . "</h4>";
                    echo "<p>" . $row['pregunta'] . "</p>";
                    echo "<small>Publicado el $fechaFormateada </small>";
                    echo "<br>";
                    echo "<a href='eliminar.php?id=$id'>Eliminar</a>";
                    echo "</div>";

                  
            if (!empty($row['respuestas'])) {
                echo "<div class='answer'><strong>Respuesta:</strong> " . $row['respuestas'] . "</div>";
                echo "<a href='eliminar_respuesta.php?id=$id'>Eliminar</a>";
            } else {
                echo "<form method='POST' action='respuesta.php'>";
                echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
                echo "<textarea name='respuesta' placeholder='Escribe tu respuesta aquí'></textarea>";
                echo "<button type='submit'>Responder</button>";
                echo "</form>";
            }

        }
              
            } else {
                echo "<p>No hay preguntas aún.</p>";
            }

            ?>
        </div>
    </div>
    <a href="logout.php">Desconectarse</a>
    <?php require 'footer.php' ?>

</body>
</html>