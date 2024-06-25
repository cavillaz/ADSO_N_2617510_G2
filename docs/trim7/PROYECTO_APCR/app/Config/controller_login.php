<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["login"])) {
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"]; 

        if (empty($usuario) || empty($contrasena)) {
            echo '<div class="alert alert-danger" role="alert">INGRESE USUARIO Y CONTRASEÑA</div>';
        } else {
            // Escapar entradas para prevenir inyecciones SQL
            $usuario = $conexion->real_escape_string($usuario);

            // Consulta para obtener la fila correspondiente al usuario
            $sql = "SELECT * FROM tb_residente WHERE correo='$usuario'";
            $resultado = $conexion->query($sql);

            // Verificar si se encontró el usuario
            if ($resultado->num_rows == 1) {
                $fila = $resultado->fetch_assoc();
                $hash_contrasena = $fila['clave']; // Asumiendo que 'clave' contiene la contraseña encriptada

                // Verificar la contraseña ingresada contra la contraseña encriptada
                if (password_verify($contrasena, $hash_contrasena)) {
                    header("location:../sidebars/inicio.php");
                    exit(); // Asegúrate de detener el script después de redirigir
                } else {
                    echo '<div class="alert alert-danger" role="alert">USUARIO O CONTRASEÑA INCORRECTOS</div>';
                }
            } else {
                echo '<div class="alert alert-danger" role="alert">USUARIO O CONTRASEÑA INCORRECTOS</div>';
            }
        }
    }
}
?>
