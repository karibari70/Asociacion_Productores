<?php
<<<<<<< HEAD

session_start();
session_destroy();

echo "<h1>Te estas desconectado</h1>";

header("refresh:5; url=foro.php");
=======
session_start();
session_destroy();

echo "<p>Finalizado</p>";

header("refresh:3;url=index_loguin.php");

exit();

?>
>>>>>>> 51cf2cccf218ab8dea900378b07a7770d10d5602
