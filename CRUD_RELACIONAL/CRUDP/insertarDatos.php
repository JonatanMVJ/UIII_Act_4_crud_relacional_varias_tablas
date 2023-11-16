<?php
include_once "../config/conexion.php";

$nombre_producto = mysqli_real_escape_string($conexion, $_POST['nombre_producto']);
$descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);
$precio = mysqli_real_escape_string($conexion, $_POST['precio']);
$dimensiones_producto = mysqli_real_escape_string($conexion, $_POST['dimensiones_producto']);
$marca = mysqli_real_escape_string($conexion, $_POST['marca']);
$num_serie = mysqli_real_escape_string($conexion, $_POST['num_serie']);
$lugar_creacion = mysqli_real_escape_string($conexion, $_POST['lugar_creacion']);

$sql = "INSERT INTO producto(nombre_producto, descripcion, precio, dimensiones_producto, marca, num_serie, lugar_creacion)
    VALUES ('$nombre_producto', '$descripcion', '$precio', '$dimensiones_producto', '$marca', '$num_serie', '$lugar_creacion')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/productos/index.php");
} else {
    echo "Datos no insertados";
}
?>
