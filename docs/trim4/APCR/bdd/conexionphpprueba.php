<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

    <?php
    // Configura la conexión a la base de datos (modifica estos valores según tu configuración)
    $host = "127.0.0.1";
    $usuario = "root";
    $contrasena = "root";
    $base_de_datos = "ejercicio_crud";

    $conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

    if ($conexion->connect_error) {
        die("Error en la conexión a la base de datos: " . $conexion->connect_error);
    }

        // Procesa la solicitud de eliminación si se ha enviado un identificador
        if (isset($_POST['eliminar']) && !empty($_POST['eliminar'])) {
            $identificacion_eliminar = $_POST['eliminar'];
    
            // Escapa el valor para prevenir inyecciones SQL
            $identificacion_eliminar = $conexion->real_escape_string($identificacion_eliminar);
    
            // Prepara la consulta SQL para eliminar el usuario
            $sql_eliminar = "DELETE FROM formulario WHERE identificacion = '$identificacion_eliminar'";
    
            // Ejecuta la consulta
            if ($conexion->query($sql_eliminar) === TRUE) {
                echo "Usuario con identificación '{$identificacion_eliminar}' eliminado exitosamente.";
            } else {
                echo "Error al eliminar el usuario: " . $conexion->error;
            }
        }

    // Realiza la consulta para obtener los usuarios registrados
    $sql = "SELECT * FROM formulario";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Identificación</th><th>Nombres</th><th>Sexo</th><th>Dirección</th><th>Correo</th><th>Fecha de Nacimiento</th><th>Móvil</th><th>Edad</th></tr>";

        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$fila['identificacion']}</td>";
            echo "<td>{$fila['nombres']}</td>";
            echo "<td>{$fila['sexo']}</td>";
            echo "<td>{$fila['direccion']}</td>";
            echo "<td>{$fila['correo']}</td>";
            echo "<td>{$fila['fecha_nacimiento']}</td>";
            echo "<td>{$fila['movil']}</td>";
            echo "<td>{$fila['edad']}</td>";
            echo "<td>
                    <form method='post' action='{$_SERVER['PHP_SELF']}'>
                        <input type='hidden' name='eliminar' value='{$fila['identificacion']}'>
                        <button type='submit' class='eliminar'>Eliminar</button>
                    </form>
                </td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No hay usuarios registrados.";
    }

    // Cierra la conexión a la base de datos
    $conexion->close();
    ?>

</body>
</html>