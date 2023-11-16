<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $nombre_categoria = $_POST['nombre_categoria'];
    $descripcion_categoria = $_POST['descripcion_categoria'];
    $fecha_creacion = $_POST['fecha_creacion'];
    $nombre_producto = $_POST['nombre_producto'];
    $costos_promedios = $_POST['costos_promedios'];
    $img_produc = $_POST['img_produc'];
    $nombre_fabricante = $_POST['nombre_fabricante'];
    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE categoria SET nombre_categoria = '$nombre_categoria',descripcion_categoria = '$descripcion_categoria',fecha_creacion = '$fecha_creacion',nombre_producto = '$nombre_producto',costos_promedios = '$costos_promedios',img_produc = '$img_produc',nombre_fabricante = '$nombre_fabricante' WHERE id = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/categoria/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
