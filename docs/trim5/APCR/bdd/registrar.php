<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "127.0.0.1";
    $username = "root";
    $password = "root";
    $dbname = "baseAPCR";

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $nombre = $_POST["nombre"];
    $identificacion = ($_POST["identificacion"])? intval($_POST['identificacion']) : null;
    $apartamento = $_POST["apartamento"];
    $torre = $_POST["torre"];
    $celular = $_POST["celular"];
    $correo =  $_POST["correo"];
    $contrasena = $_POST["contrasena"];

  /*   if ($identificacion === null) {
        die("Error: La identificación no es un número válido");
    } */
    // SQL query to insert data into the database
    $sql = "INSERT INTO residente (nombre, identificacion, apartamento, torre, celular, correo, contrasena) 
            VALUES ('$nombre', '$identificacion', '$apartamento', '$torre', '$celular', '$correo', '$contrasena')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>