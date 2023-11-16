<?php
include_once("../../config/conexion.php")
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">
</head>

<body>

    <!-- CODIGO DE NAVBAR RESPONSIVA -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url; ?>">
                    <img src="<?php echo base_url; ?>img/logo.png" alt="logo" height="55" width="115">
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mi-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/productos/index.php">ARTICULOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/categorias/index.php">SUCURSALES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/marcas/index.php">MARCAS</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN CODIGO DE NAVBAR RESPONSIVA -->

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">ACTUALIZAR PRODUCTO</h5>
                        <form action="../../CRUDP/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM articulo WHERE id_articulo =" . $_REQUEST['Id'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                            ?>
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['id_articulo'] ?>">

                            <!-- TRAER DATOS CATEGORIAS -->
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Tipo de articulo</label>
                                <input type="text" class="form-control" id="tip_art" name="tip_art" placeholder="Tipo de Articulo" value="<?php echo $row['tip_art'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="marcasU" class="form-label">Marca</label>
                                <select class="form-select form-select-lg" name="marca" id="marca">
                                    <option selected disabled>Seleccione una marca</option>
                                    <?php
                                    include_once("../../config/conexion.php");

                                    $sql3 = "SELECT * FROM marca WHERE id_marca=" . $row['id_marca'];
                                    $resultado3 = $conexion->query($sql3);

                                    $row3 = $resultado3->fetch_assoc();

                                    echo "<option selected value='" . $row3['id_marca'] . "'>" . $row3['nom_marca'] . "</option>";

                                    $sql4 = "SELECT * FROM marca";
                                    $resultado4 = $conexion->query($sql4);

                                    while ($fila = $resultado4->fetch_array()) {
                                        if ($fila['id_marca'] !== $row3['id_marca']) {
                                            echo "<option value='" . $fila['id_marca'] . "'>" . $fila['nom_marca'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="marcasU" class="form-label">Sucursal</label>
                                <select class="form-select form-select-lg" name="sucursal" id="sucursal">
                                    <option selected disabled>Seleccione una sucursal</option>
                                    <?php
                                    include_once("../../config/conexion.php");

                                    $sql3 = "SELECT * FROM sucursal WHERE id_sucursal=" . $row['id_sucursal'];
                                    $resultado3 = $conexion->query($sql3);

                                    $row1 = $resultado3->fetch_assoc();

                                    echo "<option selected value='" . $row1['id_sucursal'] . "'>" . $row1['nom_sucursal'] . "</option>";

                                    $sql4 = "SELECT * FROM sucursal";
                                    $resultado4 = $conexion->query($sql4);

                                    while ($fila = $resultado4->fetch_array()) {
                                        if ($fila['id_sucursal'] !== $row1['id_sucursal']) {
                                            echo "<option value='" . $fila['id_sucursal'] . "'>" . $fila['nom_sucursal'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nom_articulo" name="nom_articulo" placeholder="Nombre del producto" value="<?php echo $row['nom_articulo'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripcion</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="2" placeholder="Descripcion"><?php echo $row['descripcion'] ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio" value="<?php echo $row['precio'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="talla" class="form-label">Talla</label>
                                <input type="text" class="form-control" name="talla" id="talla" placeholder="Talla" value="<?php echo $row['talla'] ?>">
                            </div>
                            <div class="text-center">
                                <a href="../productos/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>
    <script src="../../js/fontawesome.js"></script>

</body>

</html>