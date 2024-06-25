<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php

     $_SESSION['active_link'] = 'adminusuarios'; // O cualquier otro identificador de enlace activo

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
<div class="position-absolute ">
  <div class="row">
    <div class="col-1">
    </div>
    <div class="col ">
    <p class="fst-italic fw-bold" >En este módulo podrá realizar la administración de los usuarios y residentes que se encuentran registrados en el conjunto residencial.</p>
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#adminUsuariosModal" style="margin-top: 80px; margin-left: 180px" onclick="window.location.href = '../modulos/baseusuarios.php';">
          <svg xmlns="http://www.w3.org/2000/svg" width="160" height="130" fill="currentColor" class="bi bi-person-fill " viewBox="0 0 16 16">
        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"></path>
        </svg>
        <hr>
            Administración usuarios
        </button>
    </div>
    <div class="col img-reportes">
          <img src="../assets/img/mod/admusuarios.png" alt="">
        </div>
    </div>
    </div>
<?php
        require_once('../sidebars/barra.php')
    ?>
</body>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/js/sidebars.js"></script>

</html>
