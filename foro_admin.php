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
        // exit();
    }

    echo "<h1>Bienvenido " . $_SESSION['usuario'] . "</h1>";

?>

<body>
<div class="contenedor_login">
    <a href="index_loguin.php" class="login_item" target="_blank">Loguin</a>
</div>
    
    <div class="container">
        <!-- Formulario a la izquierda -->
        <div class="form-container">
            <h2>Haz tu Pregunta</h2>
            <form method="post" action="agregarConsulta.php">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" id="correo" name="correo" required>
                </div>
                <div class="form-group">
                    <label for="pregunta">Tu pregunta:</label>
                    <textarea placeholder="max. 200 caracteres" id="pregunta" name="pregunta" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Enviar Pregunta</button>
                </div>
            </form>
        </div>

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
                    $id = $row['id'];
                    echo "<div class='question'>";
                    echo "<h4>" . $row['nombre'] . "</h4>";
                    echo "<p>" . $row['pregunta'] . "</p>";
                    echo "<small>Publicado el $fechaFormateada </small>";
                    echo "<br>";
                    echo "<a href='eliminar.php?id=$id'>Eliminar</a>";
                    echo "</div>";
                    // echo $row['nombre'];
                    // echo $row['pregunta'];
                    // echo $row['nombre'];
                  
            // Mostrar respuesta si existe
            if (!empty($row['respuestas'])) {
                echo "<div class='answer'><strong>Respuesta:</strong> " . $row['respuestas'] . "</div>";
            } else {
                // Formulario para responder a la pregunta
                echo "<form method='POST' action='respuesta.php'>";
                echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
                echo "<textarea name='respuesta' placeholder='Escribe tu respuesta aquí'></textarea>";
                echo "<button type='submit'>Responder</button>";
                echo "</form>";
            }

        }
              
            } else {
                echo "<p>No hay preguntas aún. Sé el primero en preguntar.</p>";
            }

            ?>
        </div>
    </div>
    <a href="logout.php">Desconectarse</a>
    <?php require 'footer.php' ?>

</body>
</html>