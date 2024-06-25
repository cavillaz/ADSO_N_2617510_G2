<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
          session_start();
          $_SESSION['active_link'] = 'zonas'; // O cualquier otro identificador de enlace activo
    ?>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</head>
<header>
    <?php
        require_once('../sidebars/header.php')
    ?>
</header>
<body>

<div class="container position-absolute">
  <div class="row">
    <div class="col-1">
    </div>
    <div class="col">
        <p class="fst-italic fw-bold" >En este módulo podrá realizar la gestión de zonas públicas y privadas como parqueaderos, salones comunales, zona BBQ entre otras</p>
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#parqueaderosModal" style="margin-top: 150px; margin-left: 180px" onclick="window.location.href = '../modulos/parqueaderos.php';">
            <svg xmlns="http://www.w3.org/2000/svg" width="160" height="130" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
                <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"></path>
            </svg>
            <hr>
            Gestión de Parqueadero
        </button>
    </div>
    <div class="col">
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#zonasComunesModal" style="margin-top: 240px; margin-left: 120px" onclick="window.location.href = '../modulos/gestion_zonas.php';">
            <svg xmlns="http://www.w3.org/2000/svg" width="160" height="130" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0"></path>
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"></path>
            </svg>
            <hr>
            Gestión de Zonas Comunes
        </button>
    </div>
  </div>
</div>

<?php
        require_once('../sidebars/barra.php')
    ?>
    


</body>
</html>
