<?php
session_start();

// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Compruebe si el formulario está enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Recuperar datos del formulario
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    // Consulta SQL para verificar las credenciales del usuario
    $sql = "SELECT * FROM residente WHERE correo='$correo' AND contrasena='$contrasena'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Usuario autenticado exitosamente
        $_SESSION["loggedin"] = true;
        $_SESSION["correo"] = $correo;
        header("Location: ../barra.html"); // Redirigir a una página de bienvenida o panel de control
        exit();
    } else {
        // Error de autenticación
        echo "Usuario o contraseña incorrectos";
    }

    // Cerrar la conexión de la base de datos
    $conn->close();
}
?>
