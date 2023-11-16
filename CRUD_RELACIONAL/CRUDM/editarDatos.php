<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $nom_fabricante = $_POST['nom_fabricante'];
    $apellidos	 = $_POST['apellidos'];
    $direccion = $_POST['direccion'];
    $piez_vendidas = $_POST['piez_vendidas'];
    $telefono = $_POST['telefono'];
    $instr_fabricado = $_POST['instr_fabricado'];
    $sucur_trabaja = $_POST['sucur_trabaja'];
    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE fabricante SET nom_fabricante = '$nom_fabricante',apellidos = '$apellidos',direccion = '$direccion',piez_vendidas = '$piez_vendidas',telefono = '$telefono',instr_fabricado = '$instr_fabricado',sucur_trabaja = '$sucur_trabaja' WHERE id = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/fabricante/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
