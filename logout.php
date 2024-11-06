<?php

session_start();
session_destroy();

echo "<h1>Te estas desconectando</h1>";

header("refresh:2; url=foro.php");
