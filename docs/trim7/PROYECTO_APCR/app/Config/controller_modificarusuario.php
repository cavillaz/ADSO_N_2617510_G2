<?php

    include "../../app/Database/conexion_db.php";
    $id=$_GET["id"];
    $sql=$conexion->query("select * from tb_residente where identificacion=$id")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR USUARIO</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/acfda1ad16.js" crossorigin="anonymous"></script>
    <!--My style css-->
    <link href="./assets/css/style.css" rel="stylesheet">
</head>
<body>
    <form class="col-md-8 mx-auto p-3" method="POST">
    <?php
        include '../../app/Config/cotrolador_editarusuario.php';
        while($datos=$sql->fetch_object()){?>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Documento</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="documento" value="<?php echo $datos->identificacion ?>" readonly>
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre" value="<?php echo $datos->nombres_usuario ?>">
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo" value="<?php echo $datos->correo ?>">
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Torre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="torre" value="<?php echo $datos->torre ?>">
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apartamento</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="apartamento" value="<?php echo $datos->apartamento ?>">
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Celular</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="celular" value="<?php echo $datos->celular ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="cambiar">Modificar</button>
            </form>
        <?php }

    ?>

    <!--Script bootstrap-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous">
    </script>
    <!--Script RFC4122-->
</body>
</html>