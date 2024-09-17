<!doctype html>
<html lang="es">

<head>
    <?php require_once('../sidebars/header.php'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/stylesGestions_zonas.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <title>Gestion Zonas</title>
</head>

<body>
    <header>
        <?php require_once('../sidebars/header.php'); ?>
    </header>

    <div id="container">
        <div id="side-bar">
            <?php require_once('../sidebars/barra.php'); ?>
        </div>

        <div id="title">
            <h1>Gestion Zonas</h1>




            <main id="form-container">
                <form action="" method="POST">

                    <h1 class="h3 mb-3 fw-normal">llene el siguiente formulario para apartar la zona deseada; </h1>

                    <?php
                    include("../../app/Database/conexion_db.php");
                    include("../../app/Config/controller_zonas_comunes.php");
                    ?>

                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" name="correo"
                            placeholder="name@example.com">
                        <label for="floatingInput">Correo electronico</label>
                    </div>

                    <div class="form-floating">
                        <select class="form-select" id="floatingTorre" name="torre">
                            <option selected disabled>Selecciona una torre</option>
                            <?php foreach ($torres as $torre): ?>
                                <option value="<?php echo $torre['numero_torre']; ?>"><?php echo $torre['numero_torre']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <label for="floatingTorre">Torre</label>
                    </div>

                    <div class="form-floating">
                        <select class="form-select" id="floatingApartamento" name="apartamento">
                            <option selected disabled>Selecciona un apartamento</option>
                            <?php foreach ($apartamentos as $apartamento): ?>
                                <option value="<?php echo $apartamento['numero_apartamento']; ?>">
                                    <?php echo $apartamento['numero_apartamento']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <label for="floatingApartamento">Apartamento</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingNombre" name="nombre"
                            placeholder="Juan Perez">
                        <label for="floatingNombre">Nombres Completos</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingDocumento" name="documento"
                            placeholder="12657895">
                        <label for="floatingDocumento">N° Documento</label>
                    </div>

                    <div class="form-floating">
                        <input type="tel" class="form-control" id="floatingCelular" name="celular"
                            placeholder="3105730204">
                        <label for="floatingCelular">Celular</label>

                    </div>

                    <div class="form-floating">
                        <select class="form-select" id="floatingApartamento" name="">
                            <option selected disabled>Selecciona la zona comun:</option>
                            <?php foreach ($zonas as $zona): ?>
                                <option value="<?php echo $zona['nombre_zona_comun']; ?>">
                                    <?php echo $zona['nombre_zona_comun']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <label for="floatingApartamento">Zonas comúnes</label>
                    </div>

                    <div class="form-floating">
                        <input type="date" class="form-control" id="floatingCelular" name="celular"
                            placeholder="3105730204">
                        <label for="floatingdate">Dia de reservacion </label>
                    </div>
                    <div class="form-floating">
                        <input type="time" class="form-control" id="floatinghora" name="hora" placeholder="3105730204">
                        <label for="floatingtime">Hora </label>
                    </div>


                    <button class="w-100 btn btn-lg btn-primary" type="submit" name="registrar">Enviar</button>
                    <button class="w-100 btn btn-lg btn-primary mt-1" type="button"
                        onclick="window.location.href = 'login.php';">Atras</button>
                    <p class="mt-5 mb-3 text-muted">&copy; Softnerd 2022-2024</p>
                </form>
            </main>
        </div>
</body>

</html>