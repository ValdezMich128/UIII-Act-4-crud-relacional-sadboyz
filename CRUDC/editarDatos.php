<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $nom_sucursal = $_POST['nom_sucursal'];
    $ciudad = $_POST['ciudad'];
    $calle = $_POST['calle'];
    $num_exterior = $_POST['num_exterior'];
    $telefono = $_POST['telefono'];
    $id_empleado = $_POST['id_empleado'];
    $gmail = $_POST['gmail'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE sucursal SET 
        nom_sucursal = '$nom_sucursal',
        ciudad = '$ciudad',
        calle = '$calle',
        num_exterior = '$num_exterior',
        telefono = '$telefono',
        id_empleado = '$id_empleado',
        gmail = '$gmail' 
    WHERE id_sucursal = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/categorias/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
