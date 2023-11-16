<?php

include "../config/conexion.php";

$nom_sucursal = $_POST['nom_sucursal'];
$ciudad = $_POST['ciudad'];
$calle = $_POST['calle'];
$num_exterior = $_POST['num_exterior'];
$telefono = $_POST['telefono'];
$id_empleado = $_POST['id_empleado'];
$gmail = $_POST['gmail'];

$sql = "INSERT INTO sucursal(
        id_sucursal,
        nom_sucursal,
        ciudad,
        calle,
        num_exterior,
        telefono,
        id_empleado,
        gmail
    )
    VALUES (
        null,
        '$nom_sucursal',
        '$ciudad',
        '$calle',
        '$num_exterior',
        '$telefono',
        '$id_empleado',
        '$gmail' 
)";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/categorias/index.php");
} else {
    echo "Datos no insertados";
}
