<?php
require 'conexion.php';

$id = $_GET['id'];
echo $id;

$sql = "DELETE FROM foro WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: foro_admin.php");
} else {
    echo "Error";
}