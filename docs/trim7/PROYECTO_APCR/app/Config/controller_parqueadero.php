
<?php
// Incluir el archivo de conexión a la base de datos
include("../../app/Database/conexion_db.php");

// Consulta para obtener los datos de parqueaderos
$sql = "SELECT id_ubicacion, estado, identificacion, placa_vehiculo, tipo_vehiculo FROM tb_parqueadero WHERE id_ubicacion IS NOT NULL AND id_ubicacion != ''";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "<table class='tabla-parqueaderos'>";
    $contador = 0;
    while($fila = $resultado->fetch_assoc()) {
        // Verificar si $fila está definida y contiene datos
        if ($fila && isset($fila['id_ubicacion'])) {
            // Determinar el color del icono
            $colorClass = ($fila['estado'] == 'Ocupado') ? 'red' : 'green';
    
            // Mostrar cada icono en una celda de la tabla
            if ($contador % 5 == 0) {
                echo "<tr>";
            }
            echo "<td>";
            echo "<div class='icono-parqueadero $colorClass'>";
            // Modificar el enlace para pasar el ID de ubicación y otros datos
            echo "<a href='../../public/modulos/formparqueaderos.php?id_ubicacion=" . $fila['id_ubicacion'] . "&identificacion=" . $fila['identificacion'] . "&placa_vehiculo=" . $fila['placa_vehiculo'] . "&tipo_vehiculo=" . $fila['tipo_vehiculo'] . "&estado=" . $fila['estado'] . "'>";
            echo "<i class='fas fa-car'></i>";
            echo "<p>" . $fila['id_ubicacion'] . "</p>";
            echo "</a>";
            echo "</div>";
            echo "</td>";
    
            $contador++;
            if ($contador % 5 == 0) {
                echo "</tr>";
            }
        } else {
            echo "Error: La variable \$fila no contiene datos válidos.";
        }
    }
    echo "</table>";

    // Liberar el resultado
    $resultado->free();
} else {
    echo "No se encontraron parqueaderos con ID válidos.";
}

// Cerrar la conexión
$conexion->close();
?>
