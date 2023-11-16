<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $nombre_producto = $_POST['nombre_producto'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $dimensiones_producto = $_POST['dimensiones_producto'];
    $marca = $_POST['marca'];
    $num_serie = $_POST['num_serie'];
    $lugar_creacion = $_POST['lugar_creacion'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE producto SET nombre_producto = '$nombre_producto',descripcion = '$descripcion',precio = '$precio',dimensiones_producto = '$dimensiones_producto', marca = '$marca', num_serie = '$num_serie', lugar_creacion = '$lugar_creacion' WHERE id = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/productos/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
