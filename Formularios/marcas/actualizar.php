<?php
require_once("../../config/conexion.php");
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">

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
                        <h5 class="card-title text-center">ACTUALIZAR MARCA</h5>
                        <form action="<?php echo base_url; ?>CRUDM/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM marca WHERE id_marca =" . $_REQUEST['Id'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                            ?>
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['id_marca'] ?>">
                            <div class="mb-3">
                                <label for="nom_marca" class="form-label">Nombre de la marca</label>
                                <input type="text" class="form-control" id="nom_marca" name="nom_marca" placeholder="Nombre de la marca" value="<?php echo $row['nom_marca'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="contrato_exp" class="form-label">Expiracion del contrato</label>
                                <input type="datetime-local" class="form-control" id="contrato_exp" name="contrato_exp" placeholder="Expiracion del contrato" value="<?php echo $row['contrato_exp'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="precio_contrato" class="form-label">Precio por el contrato</label>
                                <input type="text" class="form-control" id="precio_contrato" name="precio_contrato" placeholder="Precio por el contrato" value="<?php echo $row['precio_contrato'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="cant_prod_tiendas" class="form-label">Cantidad de productos en tienda</label>
                                <input type="text" class="form-control" id="cant_prod_tiendas" name="cant_prod_tiendas" placeholder="Cantida de productos en tiendas" value="<?php echo $row['cant_prod_tiendas'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="vision" class="form-label">Vision</label>
                                <input type="text" class="form-control" id="vision" name="vision" placeholder="Vision de la marca" value="<?php echo $row['vision'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="total_ventas" class="form-label">Total de ventas</label>
                                <input type="text" class="form-control" id="total_ventas" name="total_ventas" placeholder="Total de ventas" value="<?php echo $row['total_ventas'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="estado" class="form-label">Estado</label>
                                <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado de la marca" value="<?php echo $row['estado'] ?>">
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

</body>

</html>