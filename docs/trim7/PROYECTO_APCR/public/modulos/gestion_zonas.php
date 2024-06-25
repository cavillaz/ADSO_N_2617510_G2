<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/stylesGestions_zonas.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <title>Gestion Zonas</title>
</head>
<header>
    <?php
        require_once('../sidebars/header.php')
    ?>
  </header>
<body>
<div id="container">

    <div id="title">
        <h1>Gestion Zonas</h1>
    </div>

    <div id="side-bar">
        <?php
                require_once('../sidebars/barra.php')
            ?>
    </div>

    <div id="menu">
        <div>
            <div>
                <h3>Elija la Zona a solicitar</h3>
                <div class="barra-opciones">
                    <select name="opciones" id="opciones">
                    <option value="elegir">Elegir</option>
                    <option value="parque_niños">Parque para Niños</option>
                    <option value="patio_principal">Patio Principal</option>
                    <option value="zona_bbq">Zona BBQ</option>
                    <option value="salon_comunal">Salon Comunal</option>
                    </select> 
            </div>
        </div>

    </div>

</div>

