<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parqueaderos</title>
    <!-- Agrega las bibliotecas de estilos y scripts necesarias, como Bootstrap y jQuery -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/acfda1ad16.js" crossorigin="anonymous"></script>
    <link href="./assets/css/style.css" rel="stylesheet">

</head>
<header id=header>
    <?php
        require_once('../sidebars/header.php')
    ?>
  </header>
<body>
    <div id="container">
        <div id="sidebar">    

        
            <?php
                    require_once('../sidebars/barra.php')
                ?>
        </div>

        <div id="parqueaderos">
            <h1 id=title>GESTIONE SU PARQUEADERO</h1>
        <?php
            include("../../app/Database/conexion_db.php");
            include("../../app/Config/controller_parqueadero.php");
        ?>
        </div>
    </div>
    
    
    



</body>

</html>
