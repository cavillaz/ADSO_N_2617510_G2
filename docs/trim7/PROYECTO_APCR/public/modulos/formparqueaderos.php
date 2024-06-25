<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Datos</title>
    <!-- Agregar la referencia al CSS de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <?php require_once('../sidebars/header.php'); ?>
    </header>
  
    <div class="container">
        <h1 class="mt-4">Actualizar Datos</h1>
        
        <form id="updateForm" method="POST" action="../../app/Config/registro_parqueadero.php" class="mt-4">
            <div class="form-group row">
                <label for="id_parqueadero_label" class="col-sm-2 col-form-label">UBICACION PARQUEADERO:</label>
                <div class="col-sm-10">
                    <input type="text" id="id_ubicacion" name="id_ubicacion" class="form-control" value="<?php echo $_GET['id_ubicacion']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="identificacion" class="col-sm-2 col-form-label">Identificación:</label>
                <div class="col-sm-10">
                    <input type="text" id="identificacion" name="identificacion" class="form-control" value="<?php echo $_GET['identificacion']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="placa" class="col-sm-2 col-form-label">Placa Vehículo:</label>
                <div class="col-sm-10">
                    <input type="text" id="placa" name="placa" class="form-control" value="<?php echo $_GET['placa_vehiculo']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="tipo" class="col-sm-2 col-form-label">Tipo de Vehículo:</label>
                <div class="col-sm-10">
                    <input type="text" id="tipo_vehiculo" name="tipo_vehiculo" class="form-control" value="<?php echo $_GET['tipo_vehiculo']; ?>" required>
                </div>
            </div>
            <!-- Botón de envío -->
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" id="submitButton" class="btn btn-primary">Actualizar Datos</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        // Obtener el valor del estado
        var estado = "<?php echo $_GET['estado']; ?>";

        // Función para deshabilitar campos y botón si el estado es "Ocupado"
        function disableFieldsAndButton() {
            if (estado === "Ocupado") {
                document.getElementById("identificacion").disabled = true;
                document.getElementById("placa").disabled = true;
                document.getElementById("tipo_vehiculo").disabled = true;
                document.getElementById("submitButton").disabled = true;
            }
        }

        // Llamar a la función al cargar la página
        disableFieldsAndButton();
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
