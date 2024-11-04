<?php

session_start();
session_destroy();

echo "<h1>Te estas desconectado</h1>";

header("refresh:5; url=foro.php");
