<?php

include "../config/conexion.php";

$nom_marca = $_POST['nom_marca'];
$contrato_exp = $_POST['contrato_exp'];
$precio_contrato = $_POST['precio_contrato'];
$cant_prod_tiendas = $_POST['cant_prod_tiendas'];
$vision = $_POST['vision'];
$total_ventas = $_POST['total_ventas'];
$estado = $_POST['estado'];

$sql = "INSERT INTO marca(
    id_marca,
    nom_marca,
    contrato_exp,
    precio_contrato,
    cant_prod_tiendas,
    vision,
    total_ventas,
    estado
) VALUES (
    null,
    '$nom_marca',
    '$contrato_exp',
    '$precio_contrato',
    '$cant_prod_tiendas',
    '$vision',
    '$total_ventas',
    '$estado'
)";


$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/marcas/index.php");
} else {
    echo "Datos no insertados";
}
