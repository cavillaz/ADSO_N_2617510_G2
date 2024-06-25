<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["cambiar"])) {
        $parqueadero = $_POST["parqueadero"];
        $identificacion = $_POST["identificacion"];
        $tipo_vehiculo = $_POST["tipo_vehiculo"];
        $estado = $_POST["estado"];
        $placa_vehiculo = $_POST["placa_vehiculo"];

        if (empty($parqueadero) || empty($identificacion) || empty($tipo_vehiculo) || empty($estado) || empty($placa_vehiculo)) {
            echo '<div class="alert alert-danger" role="alert">LOS CAMPOS NO PUEDEN ESTÁR VACIOS</div>';
        } else {
            $parqueadero = $_POST["parqueadero"];
            $identificacion = $_POST["identificacion"];
            $tipo_vehiculo = $_POST["tipo_vehiculo"];
            $estado = $_POST["estado"];
            $placa_vehiculo = $_POST["placa_vehiculo"];
            $sql=$conexion->query(" update tb_parqueadero set identificacion='$identificacion', tipo_vehiculo='$tipo_vehiculo', estado='$estado', placa_vehiculo='$placa_vehiculo' where id_ubicacion=$parqueadero");
            echo '<script>window.location.href = "../../public/sidebars/reportes.php?modal=modalParqueadero";</script>';}
    }
}

?>

