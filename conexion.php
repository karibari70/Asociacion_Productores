<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "productores_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Conexion Fallida: " . $conn->connect_error);
}

