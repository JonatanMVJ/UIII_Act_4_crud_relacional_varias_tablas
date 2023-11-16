<?php
include "../config/conexion.php";

$nombre_categoria = mysqli_real_escape_string($conexion, $_POST['nombre_categoria']);
$descripcion_categoria = mysqli_real_escape_string($conexion, $_POST['descripcion_categoria']);
$fecha_creacion = mysqli_real_escape_string($conexion, $_POST['fecha_creacion']);
$nombre_producto = mysqli_real_escape_string($conexion, $_POST['nombre_producto']);
$costos_promedios = mysqli_real_escape_string($conexion, $_POST['costos_promedios']);
$img_produc = mysqli_real_escape_string($conexion, $_POST['img_produc']);
$nombre_fabricante = mysqli_real_escape_string($conexion, $_POST['nombre_fabricante']);

$sql = "INSERT INTO categoria (nombre_categoria, descripcion_categoria, fecha_creacion, nombre_producto, costos_promedios, img_produc, nombre_fabricante)
    VALUES ('$nombre_categoria','$descripcion_categoria','$fecha_creacion','$nombre_producto','$costos_promedios','$img_produc','$nombre_fabricante')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/categoria/index.php");
} else {
    echo "Error en la inserción: " . mysqli_error($conexion);
}
?>
