<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--fivicon-->
    <link
      type="image/x-icon"
      href="./assets/img/logos/logo.png"
      rel="icon">
    <!--Bootstrap css-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/acfda1ad16.js" crossorigin="anonymous"></script>
    <!--My style css-->
    <link href="./assets/css/style.css" rel="stylesheet">
    <!--My title side-->
    <title>PARQUEADEROS</title>
    
  </head>
  <header>
    <?php
        require_once('../sidebars/header.php')
    ?>
  </header>
  <body>
  <h1 class="text-center p-3">PARQUEADEROS</h1>
  <?php
          include("../../app/Database/conexion_db.php");
          include("../../app/Config/eliminar_usuario.php");
    ?>
  <div class="container-fluid row p-3">
    <table class="table m-3">
  <thead class="bg-dark">
    <tr>
      <th scope="col" class="text-white text-center"># Parqueadero</th>
      <th scope="col" class="text-white text-center">Identificación</th>
      <th scope="col" class="text-white text-center">Vehiculo</th>
      <th scope="col" class="text-white text-center">Estado</th>
      <th scope="col" class="text-white text-center">Placa Vehiculo</th>
      <th scope="col" class="text-white text-center"></th>
    </tr>
  </thead>
  <tbody>
      <?php
          $sql=$conexion->query(" select * from tb_parqueadero where estado='Ocupado'");
          while($datos=$sql->fetch_object()){?>
          <tr>
            <td class="text-center"><?= $datos->id_ubicacion ?></td>
            <td class="text-center"><?= $datos->identificacion ?></td>
            <td class="text-center"><?= $datos->tipo_vehiculo ?></td>
            <td class="text-center"><?= $datos->estado ?></td>
            <td class="text-center"><?= $datos->placa_vehiculo ?></td>
            <td class="text-center">
            <a href="../../app/Config/controller_modificarparqueadero.php?id=<?= $datos->id_ubicacion ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>            
<!--             <a onclick="return eliminar()" href="../../public/modulos/baseusuarios.php?id=<?= $datos->identificacion ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></a>
 -->            </td>
          </tr>
      <?php }
      ?>
  </tbody>
</table>
    </div>
  </div>

    <!--Script bootstrap-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
    <!--Script Usuario-->
    <script src="../assets/js/advertenciaeliminar.js"></script>


  </body>
</html>