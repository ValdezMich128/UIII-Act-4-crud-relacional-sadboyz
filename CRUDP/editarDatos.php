<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $nom_articulo = $_POST['nom_articulo'];
    $id_marca = $_POST['marca'];
    $id_sucursal = $_POST['sucursal'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $talla = $_POST['talla'];
    $tip_art = $_POST['tip_art'];
    
    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE articulo SET 
        nom_articulo = '$nom_articulo',
        descripcion = '$descripcion',
        talla = '$talla',
        id_sucursal = '$id_sucursal',
        id_marca = '$id_marca',
        tip_art = '$tip_art',
        precio = '$precio'
    WHERE id_articulo = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/productos/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
