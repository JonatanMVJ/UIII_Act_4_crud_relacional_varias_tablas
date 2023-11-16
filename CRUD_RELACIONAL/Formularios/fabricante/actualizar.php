<?php
require_once("../../config/conexion.php");
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">

<body>

    <!-- CODIGO DE NAVBAR RESPONSIVA -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url; ?>">
                    <img src="<?php echo base_url; ?>img/logo.png" alt="logo" height="55" width="115">
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mi-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>">INICIO</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url; ?>Formularios/productos/index.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/categoria/index.php">Categoria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/fabricante/index.php">Fabricante</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN CODIGO DE NAVBAR RESPONSIVA -->

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Actualizar formulario fabricante</h5>
                        <form action="<?php echo base_url; ?>CRUDM/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM fabricante WHERE id =" . $_REQUEST['Id'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                            ?>
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['id'] ?>">
                            <div class="mb-3">
                            <label for="nom_fabricante" class="form-label">Nombre del fabricante</label>
                                <input type="text" class="form-control" id="nom_fabricante" name="nom_fabricante" placeholder="" value="<?php echo $row['nom_fabricante'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="apellidos" class="form-label">apellidos</label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="  " value="<?php echo $row['apellidos'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="direccion" class="form-label">direccion</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="  " value="<?php echo $row['direccion'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="piez_vendidas" class="form-label">piezas vendidas</label>
                                <input type="num" class="form-control" id="piez_vendidas" name="piez_vendidas" placeholder="  " value="<?php echo $row['piez_vendidas'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">telefono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="  " value="<?php echo $row['telefono'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="instr_fabricado" class="form-label">instrumento fabricado</label>
                                <input type="text" class="form-control" id="instr_fabricado" name="instr_fabricado" placeholder="  " value="<?php echo $row['instr_fabricado'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="sucur_trabaja" class="form-label">sucursal en que trabaja</label>
                                <input type="text" class="form-control" id="sucur_trabaja" name="sucur_trabaja" placeholder="  " value="<?php echo $row['sucur_trabaja'] ?>">
                            </div>
                            <div class="text-center">
                                <a href="../productos/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>

</body>

</html>