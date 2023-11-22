<?php
// Iniciar sesión
session_start();
 
// Conexión a la base de datos
$db = mysqli_connect('127.0.0.1', 'root', 'root', 'baseAPCR');
 
$errors = [];

// Si se ha enviado el formulario
if (isset($_POST['ingresar'])) {
  $correo = mysqli_real_escape_string($db, $_POST['correo']);
  $contrasena = mysqli_real_escape_string($db, $_POST['contrasena']);
 
  // Comprobar si el nombre de usuario es válido
  $query = "SELECT * FROM residente WHERE correo='$correo'";
  $results = mysqli_query($db, $query);
 
  if (mysqli_num_rows($results) == 1) {
    // Nombre de usuario válido, verificar contraseña
    $row = mysqli_fetch_assoc($results);
    if (password_verify($contrasena, $row['contrasena'])) {
      // Inicio de sesión válido
      $_SESSION['correo'] = $correo;
      header('location: index.html');
    } else {
      // Contraseña inválida
      $errors[] = "Nombre de usuario/contraseña inválidos";
    }
  } else {
    // Nombre de usuario inválido
    $errors[] = "Nombre de usuario/contraseña inválidos";
  }
    if (count($errors) > 0) {
      echo "<div class='alert alert-danger' role='alert'>";
      foreach ($errors as $error) {
          echo $error . "<br>";
      }
      echo "</div>";
  } 
}
?>

