<?php
require("conexion.php");
    
     if ($conexion->connect_error) {
         die("Error en la conexión a la base de datos: " . $conexion->connect_error);
     }
 
     // Verifica si el formulario fue enviado
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
         // Recupera los datos del formulario
         $nombres = $_POST["nombres"];
         $identificacion = $_POST["identificacion"];
         $apartamento = $_POST["apartamento"];
         $torre = $_POST["torre"];
         $celular = $_POST["celular"];
         $correo = $_POST["correo"];
         $clave = $_POST["clave"];
         
         // Prepara la consulta SQL para la inserción
         $sql = "INSERT INTO residente (nombres, identificacion, apartamento, torre, celular, correo, clave) VALUES ('$nombres', '$identificacion', '$apartamento', '$torre', '$celular', '$correo', '$clave')";
         
 
         // Ejecuta la consulta
         if ($conexion->query($sql) === TRUE) {
             echo "Registro exitoso";
         } else {
             echo "Error en el registro: " . $conexion->error;
         }
     }
 
     // Cierra la conexión a la base de datos
     $conexion->close();