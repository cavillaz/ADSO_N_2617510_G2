<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["cambiar"])) {
        $documento = $_POST["documento"];
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $torre = $_POST["torre"];
        $apartamento = $_POST["apartamento"];
        $celular = $_POST["celular"];

        if (empty($documento) || empty($nombre) || empty($correo) || empty($torre) || empty($apartamento) || empty($celular)) {
            echo '<div class="alert alert-danger" role="alert">LOS CAMPOS NO PUEDEN ESTÁR VACIOS</div>';
        } else {
            $documento = $_POST["documento"];
            $nombre = $_POST["nombre"];
            $correo = $_POST["correo"];
            $torre = $_POST["torre"];
            $apartamento = $_POST["apartamento"];
            $celular = $_POST["celular"];
            $sql=$conexion->query(" update tb_residente set nombres_usuario='$nombre', correo='$correo', torre='$torre', apartamento='$apartamento', celular='$celular' where identificacion=$documento");
            echo '<script>window.location.href = "../../public/modulos/baseusuarios.php";</script>';}
    }
}

?>

