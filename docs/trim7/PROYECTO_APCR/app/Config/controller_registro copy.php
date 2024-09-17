<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["registrar"])) {
        $correo = $_POST["correo"];
        $contrasena = password_hash(($_POST["contrasena"]), PASSWORD_DEFAULT);
        $nombre = $_POST["nombre"];
        $documento = $_POST["documento"];
        $torre = isset($_POST["torre"]) ? $_POST["torre"] : ""; 
        $apartamento = isset($_POST["apartamento"]) ? $_POST["apartamento"] : "";
        $celular = $_POST["celular"];

        if (empty($correo) || empty($contrasena) || empty($nombre) || empty($documento) || empty($torre) || empty($apartamento) || empty($celular)) {
            echo '<div class="alert alert-danger" role="alert">FALTAN DATOS</div>';
        } else {
            $consulta = $conexion->query("SELECT * FROM tb_residente WHERE identificacion = '$documento'");
            $existeUsuario = $consulta->fetch_assoc();

            if ($existeUsuario) {
                echo '<div class="alert alert-danger" role="alert">EL DOCUMENTO YA ESTÁ REGISTRADO</div>';
            } else {
                // Insertar usuario en la base de datos
                $sql = $conexion->query("INSERT INTO tb_residente(identificacion, nombres_usuario, correo, torre, apartamento, celular, clave) VALUES ('$documento', '$nombre', '$correo', '$torre', '$apartamento', '$celular', '$contrasena')");

                if ($sql == 1) {
                    echo '<div class="alert alert-success" role="alert">USUARIO REGISTRADO CORRECTAMENTE</div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">ERROR AL REGISTRARSE</div>';
                }
            }
        }
    }
}

$consultaTorres = $conexion->query("SELECT * FROM tb_torres");
$torres = $consultaTorres->fetch_all(MYSQLI_ASSOC);

// Consulta para obtener los apartamentos de la base de datos
$consultaApartamentos = $conexion->query("SELECT * FROM tb_apartamentos");
$apartamentos = $consultaApartamentos->fetch_all(MYSQLI_ASSOC);
?>
