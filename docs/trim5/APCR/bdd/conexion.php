<?php

// Parametros de conexion de base de datos
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "baseAPCR";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>