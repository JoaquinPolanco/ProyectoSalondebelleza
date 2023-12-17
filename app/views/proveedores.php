<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "app/views/sections/css.php"; ?>
    <link rel="shortcut icon" href="<?php echo URL;?>public_html/images/logotransparente.png" type="image/x-icon">
    <title>Proveedores - Iveth´s Beauty Salón Spa & Nails</title>
</head>
<body>
    <div class="container">
        <!--Todos los elementos del encabezado-->
        <section id="encabezado">
            <?php include_once "app/views/sections/header.php"; ?>
        </section>
        <!--Opciones de menu-->
        <section id="menu">
            <?php include_once "app/views/sections/menu.php"; ?>
        </section>
        <!-- Todos los elementos que varian-->
        <section id="contenido">
            <!-- listado de proveedores -->
            <div id="contentList" class="mt-3">
                <h4>
                    <i class="bi bi-telephone-fill"></i>
                    Proveedores
                    <button type="button" class="btn btn-dark btncolor float-end" id="btnAgregar">
                        <i class="bi bi-plus-circle"></i>
                        Agregar Proveedor
                    </button>
                </h4>
                <hr>
                <!-- Cuadro de busqueda -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group mb-3">
                            <input type="search" class="form-control"  aria-describedby="basic-addon2" id="txtSearch">
                            <span class="input-group-text" id="basic-addon2"><i class="bi bi-search"></i></span>
                        </div>
                    </div>
                </div>
                <!-- Fin de cuadro de busqueda -->
                <!-- Inicio de la tabla-->
                    <div id="contentTable">
                        <table class="table">
                            <thead class="table-dark">
                                <th>Código de Proveedor</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Nombre de la empresa</th>
                                <th>Teléfono</th>
                                <th>Dirección</th>
                                <th>Correo</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                <td>1</td>
                                <td>Kevin</td>
                                <td>Ocotán</td>
                                <td>Seytú</td>
                                <td>2366-1296</td>
                                <td>El Salvador, San Salvador</td>
                                <td>seytu@gmail.com</td>
                                <td>
                                    <button type="button" class="btn btn-dark btncolor"><i class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-danger btncolor"><i class="bi bi-trash"></i></button>
                                </td>
                            </tbody>
                        </table>
                    </div>
                <!-- Fin de la tabla -->
                <!--Paginacion -->
                <div class="row">
                    <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Fin de paginacion -->
            </div>
            <!-- Fin del listado de proveedores -->
            <!--Incio de formulario de proveedores -->
            <div id="contentForm" class="mt-3 d-none">
                <h4>
                    <i class="bi bi-telephone-fill"></i>
                    Proveedores
                </h4>
                <hr>
                <form id="formProveedor" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="nombres" class="col-sm-2 col-form-label">Nombres:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombres" name="nombres" required>
                            <input type="hidden" name="id_proveedor" id="id_proveedor" value="0">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="apellidos" class="col-sm-2 col-form-label">Apellidos:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="empresa" class="col-sm-2 col-form-label">Nombre de la empresa:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="empresa" name="empresa" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="telefono" class="col-sm-2 col-form-label">Número de teléfono:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="telefono" name="telefono" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="direccion" class="col-sm-2 col-form-label">Dirección:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="direccion" name="direccion" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="correo" class="col-sm-2 col-form-label">Correo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="correo" name="correo" required>
                        </div>
                    </div>
                    
                    <button type="button" class="btn btn-secondary" id="btnCancelar"><i class="bi bi-x-circle-fill"></i> Cancelar</button>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-hdd"></i> Guardar</button>
                </form>
            </div>
            <!--Fin de formulario de proveedores -->
        </section>
    <!--Todos los elementos del pie del sitio-->
        <section id="pie">
            <?php include_once "app/views/sections/footer.php"; ?>
        </section>
    </div>
    <?php include_once "app/views/sections/scripts.php"; ?>
    <script src="<?php echo URL;?>public_html/customjs/proveedores.js"></script>
</body>
</html>