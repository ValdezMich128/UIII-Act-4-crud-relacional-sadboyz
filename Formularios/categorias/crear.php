<?php
require_once("../../config/conexion.php");
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar</title>
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
                        <h5 class="card-title text-center">REGISTRAR CATEGORIAS</h5>
                        <form action="<?php echo base_url; ?>CRUDC/insertarDatos.php" method="POST">
                        <div class="mb-3">
                                <label for="nom_sucursal" class="form-label">Nombre de la sucursal</label>
                                <input type="text" class="form-control" id="nom_sucursal" name="nom_sucursal" placeholder="Nombre de la sucursal" require>
                            </div>
                            <div class="mb-3">
                                <label for="ciudad" class="form-label">Ciudad</label>
                                <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Nombre de la ciudad" require>
                            </div>
                            <div class="mb-3">
                                <label for="calle" class="form-label">Calle</label>
                                <input type="text" class="form-control" id="calle" name="calle" placeholder="Nombre de la calle" require>
                            </div>
                            <div class="mb-3">
                                <label for="num_exterior" class="form-label">Numero exterior</label>
                                <input type="text" class="form-control" id="num_exterior" name="num_exterior" placeholder="Numero exterior" require>
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" require>
                            </div>
                            <div class="mb-3">
                                <label for="id_empleado" class="form-label">ID del empleado a cargo</label>
                                <input type="text" class="form-control" id="id_empleado" name="id_empleado" placeholder="ID del empleado" require>
                            </div>
                            <div class="mb-3">
                                <label for="gmail" class="form-label">Gmail</label>
                                <input type="text" class="form-control" id="gmail" name="gmail" placeholder="Gmail" require>
                            </div>
                            <div class="text-center">
                                <a href="<?php echo base_url; ?>Formularios/categorias/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
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