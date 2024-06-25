<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none; 
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../assets/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-register">
  <form action="" method="POST">

    <img class="mb-4" src="../assets/img/logo/logoapcr.png" alt="" width="92" height="77">
    <h1 class="h3 mb-3 fw-normal">Registro</h1>
    <?php
        include("../../app/Database/conexion_db.php");
        include("../../app/Config/controller_registro.php");
    ?>
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" name="correo" placeholder="name@example.com">
      <label for="floatingInput">Correo electrónico</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="contrasena" placeholder="Password">
      <label for="floatingPassword">Contraseña</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingNombre" name="nombre" placeholder="Juan Perez">
      <label for="floatingNombre">Nombres Completos</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="floatingDocumento"  name="documento" placeholder="12657895">
      <label for="floatingDocumento">N° Documento</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="floatingCelular" name="celular" placeholder="3105730204">
      <label for="floatingCelular">Celular</label>
    </div>
    <div class="form-floating">
        <select class="form-select" id="floatingTorre" name="torre">
            <option selected disabled>Selecciona una torre</option>
                <?php foreach ($torres as $torre) : ?>
            <option value="<?php echo $torre['numero_torre']; ?>"><?php echo $torre['numero_torre']; ?></option>
            <?php endforeach; ?>
        </select>
        <label for="floatingTorre">Torre</label>
        </div>
        <div class="form-floating">
        <select class="form-select" id="floatingApartamento" name="apartamento">
            <option selected disabled>Selecciona un apartamento</option>
                <?php foreach ($apartamentos as $apartamento) : ?>
            <option value="<?php echo $apartamento['numero_apartamento']; ?>"><?php echo $apartamento['numero_apartamento']; ?></option>
            <?php endforeach; ?>
        </select>
        <label for="floatingApartamento">Apartamento</label>
    </div>

    <div class="checkbox mb-3 mt-2">
      <label>
        <input type="checkbox" value="remember-me"> Recordarme
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="registrar">Enviar</button>
    <button class="w-100 btn btn-lg btn-primary mt-1" type="button" onclick="window.location.href = 'login.php';">Ingresar</button>
    <p class="mt-5 mb-3 text-muted">&copy; Softnerd 2022-2024</p>
  </form>
</main>
    
  </body>
</html>
