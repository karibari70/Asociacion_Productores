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
    <div class="contenido_principal">
        <div class="container">
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
                    <div>
                        <a href="ingresar.php">Ingresar</a>
                    </div>
                </form>
            </div>

            <div class="questions-container">
                <h2>Preguntas Recientes</h2>
                <?php
                require 'conexion.php';
                $sql = "SELECT * from foro";
                $result = $conn->query($sql);

                if ($result->num_rows> 0) {
                    while ($row = $result->fetch_assoc()) {
                        $fechaFormateada = date("d/m/Y", strtotime($row['fecha'])); 
                        echo "<div class='question'>";
                        echo "<h4>" . $row['nombre'] . "</h4>";
                        echo "<p>" . $row['pregunta'] . "</p>";
                        echo "<small>Publicado el $fechaFormateada </small>";
                        echo "</div>";

                if (!empty($row['respuestas'])) {
                    echo "<div class='answer'><strong>Respuesta:</strong> " . $row['respuestas'] . "</div>";
                } 
            }
                
                } else {
                    echo "<p>No hay preguntas aún. Sé el primero en preguntar.</p>";
                }
                ?>
            </div>
        </div>
    </div>
    
    <?php require 'footer.php' ?>

</body>
</html>