<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $nom_marca = $_POST['nom_marca'];
    $contrato_exp = $_POST['contrato_exp'];
    $precio_contrato = $_POST['precio_contrato'];
    $cant_prod_tiendas = $_POST['cant_prod_tiendas'];
    $vision = $_POST['vision'];
    $total_ventas = $_POST['total_ventas'];
    $estado = $_POST['estado'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE marca SET 
        nom_marca = '$nom_marca',
        contrato_exp = '$contrato_exp',
        precio_contrato = '$precio_contrato',
        cant_prod_tiendas = '$cant_prod_tiendas',
        vision = '$vision',
        total_ventas = '$total_ventas',
        estado = '$estado'
    WHERE id_marca = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/marcas/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
