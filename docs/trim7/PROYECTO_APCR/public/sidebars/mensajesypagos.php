<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <?php
        session_start();
        $_SESSION['active_link'] = 'mensajesypagos'; // O cualquier otro identificador de enlace activo
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
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#correspondenciaModal" style="margin-top: 150px; margin-left: 180px">
            <svg xmlns="http://www.w3.org/2000/svg" width="160" height="130" fill="currentColor" class="bi bi-envelope-open" viewBox="0 0 16 16">
                <path d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882zM15 7.383l-4.778 2.867L15 13.117zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765z"></path>
            </svg>
            <hr>
            Gestión de correspondencia
        </button>
    </div>
    <div class="col">
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#pagosModal" style="margin-top: 240px; margin-left: 120px">
            <svg xmlns="http://www.w3.org/2000/svg" width="160" height="130" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5z"></path>
            </svg>
            <hr>
            Gestión de pagos
        </button>
    </div>
  </div>
</div>

<?php
        require_once('../sidebars/barra.php')
    ?>
<!-- Modal para Gestión de correspondencia -->
<div class="modal fade" id="correspondenciaModal" tabindex="-1" aria-labelledby="correspondenciaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="correspondenciaModalLabel">Gestión de correspondencia</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Contenido del modal para la Gestión de correspondencia...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal para Gestión de pagos -->
<div class="modal fade" id="pagosModal" tabindex="-1" aria-labelledby="pagosModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pagosModalLabel">Gestión de pagos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Contenido del modal para la Gestión de pagos...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>
