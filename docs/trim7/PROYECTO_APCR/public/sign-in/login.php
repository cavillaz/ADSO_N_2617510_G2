<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin</title>

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
    
<main class="form-signin">
  <form action="" method="POST">
    <img class="mb-4" src="../assets/img/logo/logoapcr.png" alt="" width="92" height="77">
    <h1 class="h3 mb-3 fw-normal">Ingreso</h1>
    <?php
        include("../../app/Database/conexion_db.php");
        include("../../app/Config/controller_login.php");
    ?>
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="usuario">
      <label for="floatingInput">Correo electrónico</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="contrasena">
      <label for="floatingPassword">Contraseña</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Recordarme
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Ingresar</button>
    <button class="w-100 btn btn-lg btn-primary mt-1" type="button" onclick="window.location.href = 'registro.php';">Registro</button>
    <p class="mt-5 mb-3 text-muted">&copy; Softnerd 2022-2024</p>
  </form>
</main>

      <script src="../assets/js/bootstrap.min.js"></script>
      <script src="../assets/js/bootstrap.bundle.min.js"></script>
    
  </body>
</html>
