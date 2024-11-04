<form method="post" action="login.php">
    <?php
    if (isset($_GET['error'])) {
        echo "<p style='color:red'>Error en validacion<p>";
    }
    ?>
    <div>Usuario</div>
    <input name="usuario" type="text">
    <div>Contraseña</div>
    <input name="contraseña" type="password">
    <button type="submit">Enviar</button>
</form>