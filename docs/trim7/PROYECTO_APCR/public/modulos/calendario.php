<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/stylescalendario.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <title>Calendario Zonas</title>
</head>
<header>
    <?php
        require_once('../sidebars/header.php')
    ?>
  </header>
<body>

<h1 class="title position-absolute">Calendario Zonas</h1>

<div class="calendar position-absolute">
    <div class="calendar__info">
        <div class="calendar__prev" id="prev-month">&#9664;</div>
        <div class="calendar__month" id="month"></div>
        <div class="calendar__year" id="year"></div>
        <div class="calendar__next" id="next-month">&#9654;</div>
    </div>

    <div class="calendar__week">
        <div class="calendar__day calendar__item">Lun</div>
        <div class="calendar__day calendar__item">Mar</div>
        <div class="calendar__day calendar__item">Mie</div>
        <div class="calendar__day calendar__item">Jue</div>
        <div class="calendar__day calendar__item">Vie</div>
        <div class="calendar__day calendar__item">Sab</div>
        <div class="calendar__day calendar__item">Dom</div>
    </div>

    <div class="calendar__dates" id="dates"></div>
</div>

<?php
        require_once('../sidebars/barra.php')
    ?>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Formulario para el día <span id="selectedDay"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>

    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sidebars.js"></script>
    
    
    
</body>
</html>
