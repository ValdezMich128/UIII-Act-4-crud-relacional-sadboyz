<?php
include_once("../../config/conexion.php")
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar</title>
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
                        <h5 class="card-title text-center">REGISTRAR PRODUCTO</h5>
                        <form action="../../CRUDP/insertarDatos.php" method="POST">
                            <div class="mb-3">
                                <label for="categoriasP" class="form-label">Tipo de Articulo</label>
                                <select class="form-select form-select-lg" name="tip_art" id="tip_art" required>
                                    <option selected disabled>Seleccione el tipo de Articulo</option>
                                    <?php
                                    include "../../config/conexion.php";

                                    $sql = $conexion->query("SELECT * FROM articulo");
                                    while ($resultado = $sql->fetch_assoc()) {
                                        echo "<option value='" . $resultado['tip_art'] . "'>" . $resultado['tip_art'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="sucursal" class="form-label">Seleccione una sucursal</label>
                                <select class="form-select form-select-lg" name="sucursal" id="sucursal" required>
                                    <option selected disabled>Seleccione una sucursal</option>
                                    <?php
                                    include "../../config/conexion.php";

                                    $sql = $conexion->query("SELECT * FROM sucursal");
                                    while ($resultado = $sql->fetch_assoc()) {
                                        echo "<option value='" . $resultado['id_sucursal'] . "'>" . $resultado['nom_sucursal'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="marcasP" class="form-label">Marcas</label>
                                <select class="form-select form-select-lg" name="marca" id="marca" required>
                                    <option selected disabled>Seleccione una marca</option>
                                    <?php
                                    include "../../config/conexion.php";

                                    $sql = $conexion->query("SELECT * FROM marca");
                                    while ($resultado = $sql->fetch_assoc()) {
                                        echo "<option value='" . $resultado['id_marca'] . "'>" . $resultado['nom_marca'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del articulo" required>
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripcion</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="2" placeholder="Descripcion" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio" required>
                            </div>
                            <div class="mb-3">
                                <label for="talla" class="form-label">Talla</label>
                                <input type="text" class="form-control" name="talla" id="talla" placeholder="Talla" required>
                            </div>
                            <div class="text-center">
                                <a href="../productos/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/fontawesome.js"></script>

</body>

</html>