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
                        <h5 class="card-title text-center">Actualizar formulario producto</h5>
                        <form action="<?php echo base_url; ?>CRUDP/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM producto WHERE id =" . $_REQUEST['Id'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                            ?>
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['id'] ?>">
                            <div class="mb-3">
                                <label for="nombre_producto" class="form-label">Nombre del producto</label>
                                <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" placeholder="" value="<?php echo $row['nombre_producto'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">descripcion</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="  " value="<?php echo $row['descripcion'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="text" class="form-control" id="precio" name="precio" placeholder="  " value="<?php echo $row['precio'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="dimensiones_producto" class="form-label">Dimensiones del producto</label>
                                <input type="text" class="form-control" id="dimensiones_producto" name="dimensiones_producto" placeholder="  " value="<?php echo $row['dimensiones_producto'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="marca" class="form-label">Marca</label>
                                <input type="text" class="form-control" id="marca" name="marca" placeholder="  " value="<?php echo $row['marca'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="num_serie" class="form-label">Numero de serie</label>
                                <input type="text" class="form-control" id="num_serie" name="num_serie" placeholder="  " value="<?php echo $row['num_serie'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="lugar_creacion" class="form-label">Lugar de creacion</label>
                                <input type="text" class="form-control" id="lugar_creacion" name="lugar_creacion" placeholder="  " value="<?php echo $row['lugar_creacion'] ?>">
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