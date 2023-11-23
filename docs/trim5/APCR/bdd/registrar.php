<?php

// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Compruebe si el formulario está enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    // Recuperar datos del formulario
    $nombre = $_POST["nombre"];
    $identificacion = ($_POST["identificacion"])? intval($_POST['identificacion']) : null;
    $apartamento = $_POST["apartamento"];
    $torre = $_POST["torre"];
    $celular = $_POST["celular"];
    $correo =  $_POST["correo"];
    $contrasena = $_POST["contrasena"];

  /*   if ($identificacion === null) {
        die("Error: La identificación no es un número válido");
    } */
    // Consulta SQL para insertar datos en la base de datos.
    $sql = "INSERT INTO residente (nombre, identificacion, apartamento, torre, celular, correo, contrasena) 
            VALUES ('$nombre', '$identificacion', '$apartamento', '$torre', '$celular', '$correo', '$contrasena')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar la conexión de la base de datos
    $conn->close();
}
?>