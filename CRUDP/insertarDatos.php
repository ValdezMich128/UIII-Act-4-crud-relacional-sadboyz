<?php

include "../config/conexion.php";

$tip_art = $_POST['tip_art'];
$marca = $_POST['marca'];
$sucursal = $_POST['sucursal'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$talla = $_POST['talla'];

$sql = "INSERT INTO 
    articulo(
        id_articulo,
        nom_articulo,
        descripcion,
        talla,
        id_sucursal,
        id_marca,
        tip_art,
        precio
    )
    VALUES (
        null,
        '$nombre',
        '$descripcion',
        '$talla',
        '$sucursal',
        '$marca',
        '$tip_art',
        '$precio'
    )";
$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/productos/index.php");
} else {
    echo "Datos no insertados";
}
