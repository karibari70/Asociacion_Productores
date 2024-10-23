<?php
session_start();
session_destroy();

echo "<p>Finalizado</p>";

header("refresh:3;url=index_loguin.php");

exit();

?>