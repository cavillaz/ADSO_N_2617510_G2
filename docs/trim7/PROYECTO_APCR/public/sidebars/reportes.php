<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        session_start();
        $_SESSION['active_link'] = 'reportes'; // O cualquier otro identificador de enlace activo
    ?>
    <link rel="stylesheet" href="../assets/css/stylesreporte.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</head>
<header>
    <?php
        require_once('../sidebars/header.php')
    ?>
</header>
<body>

<div class="position-absolute">
  <div class="row">
    <div class="col-1">
    </div>
    <div class="col ">
        <p class="fst-italic fw-bold" >En este modulo podrá realizar la gestión de zonas públicas y privadas como parqueaderos, salones comunales, zona BBQ entre otras</p>
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modalParqueadero" style="margin-top: 80px; margin-left: 180px">
        <svg xmlns="http://www.w3.org/2000/svg" width="160" height="130" fill="#000000" class="bi bi-car-front-fill" viewBox="0 0 16 16">
            <path d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0m10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17s2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276"></path>
            <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.8.8 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155s4.037-.084 5.592-.155A1.48 1.48 0 0 0 15 9.611v-.413q0-.148-.03-.294l-.335-1.68a.8.8 0 0 0-.43-.563 1.8 1.8 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3z"></path>
        </svg>
        <hr>
            Reportes parqueadero
        </button>
    </div>
    <div class="col img-reportes">
          <img src="../assets/img/mod/reportes.png" alt="">
        </div>
    </div>
    </div>
    <?php
        require_once('../sidebars/barra.php')
    ?>


    
    <!-- Modal para Gestión de correspondencia onclick="window.location.href = '../modulos/baseparqueaderos.php';"-->
<div class="modal fade" id="modalParqueadero" tabindex="-1" aria-labelledby="modalParqueaderoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalParqueaderoLabel">REPORTE DE PARQUEADEROS </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
                    
               </td>
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>

</body>


</html>

