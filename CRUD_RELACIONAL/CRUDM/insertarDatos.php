<?php
include "../config/conexion.php";

$nom_fabricante = mysqli_real_escape_string($conexion, $_POST['nom_fabricante']);
$apellidos = mysqli_real_escape_string($conexion, $_POST['apellidos']);
$direccion = mysqli_real_escape_string($conexion, $_POST['direccion']);
$piez_vendidas = mysqli_real_escape_string($conexion, $_POST['piez_vendidas']);
$telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
$instr_fabricado = mysqli_real_escape_string($conexion, $_POST['instr_fabricado']);
$sucur_trabaja = mysqli_real_escape_string($conexion, $_POST['sucur_trabaja']);

$sql = "INSERT INTO fabricante (nom_fabricante, apellidos, direccion, piez_vendidas, telefono, instr_fabricado, sucur_trabaja)
    VALUES ('$nom_fabricante','$apellidos','$direccion','$piez_vendidas','$telefono','$instr_fabricado','$sucur_trabaja')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/fabricante/index.php");
} else {
    echo "Error en la inserción: " . mysqli_error($conexion);
}
?>
