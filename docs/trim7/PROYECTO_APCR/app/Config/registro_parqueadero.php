<?php
// Incluir el archivo de conexión a la base de datos
include("../../app/Database/conexion_db.php");

// Verificar conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

// Verificar si $_POST['id_ubicacion'] está definida y no está vacía
if (isset($_POST['id_ubicacion']) && !empty($_POST['id_ubicacion'])) {
    $id_ubicacion = $_POST['id_ubicacion'];

    // Obtener otros datos del formulario
    $identificacion = $_POST['identificacion'];
    $placa = $_POST['placa'];
    $tipo = $_POST['tipo_vehiculo'];
    $estado = "Ocupado"; // Estado automáticamente establecido como "Ocupado"

    // Consulta SQL para verificar si la identificación ya existe
    $sql_verificar = "SELECT COUNT(*) as total FROM tb_parqueadero WHERE identificacion = '$identificacion' AND id_ubicacion != '$id_ubicacion'";
    $resultado_verificar = $conexion->query($sql_verificar);

    if ($resultado_verificar->num_rows > 0) {
        $fila_verificar = $resultado_verificar->fetch_assoc();
        if ($fila_verificar['total'] > 0) {
            echo '<div class="alert alert-danger" role="alert">La identificación ya existe y no se puede registrar.</div>';
        } else {
            // Consulta SQL para actualizar los datos
            $sql = "UPDATE tb_parqueadero SET identificacion = '$identificacion', placa_vehiculo = '$placa', tipo_vehiculo = '$tipo', estado = '$estado' WHERE id_ubicacion = '$id_ubicacion'";

            // Ejecutar la consulta de actualización
            if ($conexion->query($sql) === TRUE) {
                echo '<script>window.location.href = "../../public/modulos/parqueaderos.php";</script>';
                exit(); // Asegurar que no se ejecuten más instrucciones después de la redirección
            } else {
                echo '<div class="alert alert-danger" role="alert">ERROR AL ACTUALIZAR</div>' . $conexion->error;
            }
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">Error al verificar la identificación.</div>';
    }

    // Liberar el resultado
    $resultado_verificar->free();
} 

// Cerrar conexión
$conexion->close();
?>
