<?php $link = mysqli_connect("localhost", "root", ""); if ($link) { mysqli_select_db($link, "ferreteriacolmex"); } ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Administrador - Ferretería Colmex
        </title>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <!-- Bootstrap core CSS-->
        <link href="/ProyectoBases2/resources/vendor/bootstrap/css/bootstrap1.min.css" rel="stylesheet"/>
        <!-- Custom fonts for this template-->
        <link href="/ProyectoBases2/resources/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- My styles-->
        <link href="/ProyectoBases2/resources/css/base.css" rel="stylesheet"/>
        <link href="/ProyectoBases2/resources/css/display-lg.css" rel="stylesheet"/>
        <link href="/ProyectoBases2/resources/css/display-md.css" rel="stylesheet"/>
        <link href="/ProyectoBases2/resources/css/display-sm.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="wrapper">
            <!-- Barra lateral en tamaños grandes y medianos  -->
            <nav id="sidebar">
                <div class="header">
                    <h4>
                        <img id="sidebarCollapse" src="/ProyectoBases2/resources/images/LogoCirculo1.png"/>
                        <a data-toggle="collapse" href="#bienvenida" role="button">
                            StockManage
                        </a>
                    </h4>
                    <strong id="sm">
                        <a data-toggle="collapse" id="linkSm">
                            <img src="/ProyectoBases2/resources/images/LogoCirculo1.png"/>
                        </a>
                    </strong>
                </div>
                <ul class="list-unstyled components">
                    <li>
                        <a data-toggle="collapse" href="#add" role="button" aria-expanded="false" aria-controls="add" class="nav-link">
                            <i class="fa fa-plus">
                            </i>
                            Agregar
                        </a>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#list" role="button" aria-expanded="false" aria-controls="list" class="nav-link">
                            <i class="fa fa-list-alt">
                            </i>
                            Listar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#bill" role="button" aria-expanded="false" aria-controls="bill" class="nav-link">
                            <i class="fa fa-book">
                            </i>
                            Facturas
                        </a>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#settings" role="button" aria-expanded="false" aria-controls="settings" class="nav-link">
                            <i class="fa fa-support">
                            </i>
                            Funciones Base
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" data-toggle="modal" data-target="#confirm" href="">
                            <i class="fa fa-power-off" id="cerrar">
                            </i>
                            <span class="nav-link-text">
                                Cerrar sesión
                            </span>
                        </a>
                    </li>
                </ul>
                <div class="footer">
                    <h6>
                        Ferretería COLMEX S.A.S &copy;
                    </h6>
                </div>
            </nav>
            <!--Navbar para telefonos -->
            <nav class="ocultar navbarSh navbar navbar-expand-lg navbar-light bg-light">
                <a data-toggle="collapse" class="navbar-brand" href="#bienvenida">
                    StockManage
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#add" role="button" aria-expanded="false" aria-controls="add" class="nav-link">
                                <i class="fa fa-plus">
                                </i>
                                Agregar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#list" role="button" aria-expanded="false" aria-controls="list" class="nav-link">
                                <i class="fa fa-list">
                                </i>
                                Listar
                            </a>
                        </li>
                        <li>
                            <a data-tooggle="collapse" href="#bill" role="button" aria-expanded="false" aria-controls="bill"class="nav-link">
                                <i class="fa fa-book">
                                </i>
                                Facturas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#settings" role="button" aria-expanded="false" aria-controls="settings" class="nav-link">
                                <i class="fa fa-support">
                                </i>
                                Funciones Base
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#confirm" href="">
                                <i class="fa fa-fw fa-power-off">
                                </i>
                                <span class="nav-link-text">
                                    Cerrar sesión
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Contenido de la pagina  -->
            <div id="content" class="background-page">
                <!--Espacio para "inicio"-->
                <div class="collapse" id="bienvenida">
                    <div class="contenido">
                        <h2>
                            ¡Bienvenido!
                        </h2>
                        <p>
                            Aquí deberíamos poner información chévere, quiza algunas de las funciones anañiticas o una vista
                        </p>
                    </div>
                </div>
                <!--Contenido de editar Producto-->
                <div class="contenido">
                    <h1 class="titleCreate">
                        Visualizar Factura
                    </h1>
                    <br/>
                    <br/>
                    <div id="formulario">
                        <div id = "imprimir">
                            <form>
                                <div class="form-group row" id="id_factura">
                                    <label class="col-md-2 " for="factura_id" readonly>
                                        No. Factura:
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control"  value="" id="factura_id" required="true" readonly/>
                                    </div>
                                </div>
                                <div class="form-group row" id="fechas">
                                    <label class="col-md-2 col-form-label" for="fecha" readonly>
                                        Fecha:
                                    </label>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control"  value="" id="fecha" required="true" readonly/>
                                    </div>
                                    <label class="col-md-2 col-form-label" for="fechaV" readonly>
                                        Fecha de Vencimiento:
                                    </label>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control"  value="" id="fechaV" required="true" readonly/>
                                    </div>
                                </div>
                                <div class="form-group row" id="empleado">
                                    <label class="col-md-2 col-form-label" for="nameEmpleado" id="empleadoLabel">
                                        Empleado:
                                    </label>
                                    <div class="col-md-7">
                                        <select id="nameEmpleado" class="browser-default custom-select" disabled>
                                            <option value="">
                                                -------------------
                                            </option>
                                            ;
                                            <?php $consultaEmpleado = mysqli_query($link, "SELECT CONCAT(nombre,' ',apellido) AS nombre, empleado_id FROM empleado ;"); while ($row = mysqli_fetch_array($consultaEmpleado)) { echo "    <option value=" . $row['empleado_id'] . "> " . $row['nombre'] . "    </option> "; } ?>
                                        </select>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row" id="cliente">
                                <label class="col-md-2 col-form-label" for="nameProducto">
                                    Cliente:
                                </label>
                                <div class="col-md-7">
                                    <select id="nameCliente"  class="form-control" disabled>
                                        <option  id="oldCliente" value="">
                                            ----------
                                        </option>
                                        <?php $consultaCliente = mysqli_query($link, "SELECT CONCAT(nombre,' ',apellido) AS nombre,cliente_id from cliente;"); while ($row = mysqli_fetch_array($consultaCliente)) { echo "    <option value=" . $row['cliente_id'] . "> " . $row['nombre'] . "    </option> "; } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row" id="proveedor" style="display: flex;">
                                <label class="col-md-2 col-form-label" for="idProveedor">
                                    Nit:
                                </label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control"  value="" id="nit" required="true" readonly/>
                                </div>
                                <label class="col-md-2 col-form-label" for="nameProveedor">
                                    Proveedor:
                                </label>
                                <div class="col-md-5">
                                    <select id="nameProveedor"  class="form-control" disabled>
                                        <option  id="oldProveedor" value="">
                                            ----------
                                        </option>
                                        <?php $consultaProveedor = mysqli_query($link, "SELECT nombre,nit from proveedor;"); while ($row = mysqli_fetch_array($consultaProveedor)) { echo "    <option value=" . $row['nit'] . "> " . $row['nombre'] . "    </option> "; } ?>
                                    </select>
                                </div>
                            </div>
                             <hr/>
                            <div id="editar_ProductoVenta" style="display: none">
                                <div class="form-group row justify-content-center" id="productSell">
                                    <label class="col-md-3" for="nombre_producto">
                                        Seleccione los productos que desea añadir:
                                    </label>
                                    <div class="col-md-8 col-form-label">
                                        <select id="producto" class="browser-default custom-select" onchange="insertProductS()">
                                            <option value="default">
                                                -------------------
                                            </option>
                                            ;
                                            <?php $consultaProducto = mysqli_query($link, "SELECT producto_id, nombre, valor_unidad FROM producto;"); while ($row = mysqli_fetch_array($consultaProducto)) { echo "  <option value=" . utf8_encode($row['producto_id']) . "--" . utf8_encode($row['valor_unidad']) . "> " . utf8_encode($row['nombre']) . "  </option> "; } ?>
                                        </select>
                                    </div>
                                    <a class="col-md-1 " href="/ProyectoBases2/paginas/producto/Create.php" target="_blank" style="color: #ffc107" onmousemove="underline(this)" onmouseout="blankunderline(this)">
                                        Agregar nuevo producto.
                                    </a>
                                </div>

                            </div>
                            <br/>
                            <!--
                                Tabla para ir mostrando los productos que se quieran añadir -->
                            <div class="table-responsive">
                                <table id="tabla_productos" class="table table-light text-font">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">
                                                Id_Producto
                                            </th>
                                            <th scope="col">
                                                Producto
                                            </th>
                                            <th scope="col">
                                                Cantidad
                                            </th>
                                            <th scope="col">
                                                Valor Unidad
                                            </th>
                                            <th scope="col">
                                                Costo
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <label class="col-md-1" id="Saldolabel">
                                    Saldo
                                </label>
                                <input class="col-md-2 " type="number" min="1" id="saldo" value="0" readonly/>
                                <br/>
                                <label class="col-md-1" id="Subtotallabel">
                                    Subtotal
                                </label>
                                <input class="col-md-2 " type="number" min="1" id="subtotal" value="0" readonly/>
                                <br/>
                                <label class="col-md-1" id="Totallabel">
                                    Total
                                </label>
                                <input class="col-md-2" type="number" min="1" id="total" value="0" readonly/>
                                <br/>
                            </div>
                        </div>
                        <!-- Div para advertencias de existencias-->
                    <div id="advertencias" class="warningDiv">
                    </div>
                    <br/>
                    </form>
                </div>
                <a class="btn btn-ambar" id="edit" >
                    Editar
                </a>
                <a class="btn btn-ambar" id="keep" onclick="actualizarFactu()" style="display: none;">
                    Guardar
                </a>
                <button class="btn btn-ambar" id ="print" onclick="imprimir_Factura()"disabled>
                    Imprimir
                </button>
                <a class="btn btn-ambar" href="/ProyectoBases2/paginas/factura/List.php">
                    Volver
                </a>
            </div>
            <!--espacio agregar-->
            <div class="collapse" id="add">
                <div class="contenido">
                    <h3>
                        Agregar
                    </h3>
                    <p>
                        ¿Te hace falta algo? No te preocupes, aquí puedes agregar lo que haga falta. Solo recuerda que tienes que
                        ser un poco ordenado.
                    </p>
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Proveedor
                                    </h5>
                                    <p class="card-text">
                                        Aquí va información acerca de algo.
                                    </p>
                                    <a href="/ProyectoBases2/paginas/proveedor/Create.php" class="btn btn-danger">
                                        Agregar
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Cliente
                                    </h5>
                                    <p class="card-text">
                                        Aquí va información acerca de algo.
                                    </p>
                                    <a href="/ProyectoBases2/paginas/cliente/Create.php" class="btn btn-danger">
                                        Agregar
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 ">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Producto
                                    </h5>
                                    <p class="card-text">
                                        Aquí va información acerca de algo.
                                    </p>
                                    <a href="/ProyectoBases2/paginas/producto/Create.php" class="btn btn-danger">
                                        Agregar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="offset-md-2 col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Empleado
                                    </h5>
                                    <p class="card-text">
                                        Aquí va información acerca de algo.
                                    </p>
                                    <a href="/ProyectoBases2/paginas/empleado/Create.php" class="btn btn-danger">
                                        Agregar
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Categoria de producto
                                    </h5>
                                    <p class="card-text">
                                        Aquí va información acerca de algo.
                                    </p>
                                    <a href="/ProyectoBases2/paginas/categoria/Create.html" class="btn btn-danger">
                                        Agregar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Espacio Listar-->
            <div class="collapse" id="list">
                <div class="contenido">
                    <h3>
                        Listas
                    </h3>
                    <p>
                        Estos son las cosas mas importantes para listar, recuerda que puedes ver detalles, editar o eliminar los registros.
                    </p>
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Proveedor
                                    </h5>
                                    <p class="card-text">
                                        Aquí va información acerca de algo.
                                    </p>
                                    <a href="/ProyectoBases2/paginas/proveedor/List.php" class="btn btn-danger">
                                        Mostrar
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Cliente
                                    </h5>
                                    <p class="card-text">
                                        Aquí va información acerca de algo.
                                    </p>
                                    <a href="/ProyectoBases2/paginas/cliente/List.php" class="btn btn-danger">
                                        Mostrar
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Producto
                                    </h5>
                                    <p class="card-text">
                                        Aquí va información acerca de algo.
                                    </p>
                                    <a href="/ProyectoBases2/paginas/producto/List.php" class="btn btn-danger">
                                        Mostrar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-sm-12 offset-md-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Empleado
                                    </h5>
                                    <p class="card-text">
                                        Aquí va información acerca de algo.
                                    </p>
                                    <a href="/ProyectoBases2/paginas/empleado/List.php" class="btn btn-danger">
                                        Mostrar
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Categoria de producto
                                    </h5>
                                    <p class="card-text">
                                        Aquí va información acerca de algo.
                                    </p>
                                    <a href="/ProyectoBases2/paginas/categoria/List.php" class="btn btn-danger">
                                        Mostrar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Espacio Factura-->
            <div class="collapse  " id="bill">
                <div class="contenido">
                    <h3>
                        Facturas
                    </h3>
                    <p>
                        Estas son algunas acciones que puedes hacer con las facturas.
                    </p>
                    <div class="row my-4">
                        <div class="offset-md-2 col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Crear factura
                                    </h5>
                                    <p class="card-text">
                                        Aquí puedes crear facturas tanto de venta como de compra para tu negocio.
                                    </p>
                                    <a href="paginas/factura/Create.php" class="btn btn-danger">
                                        Crear
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Lista de Facturas
                                    </h5>
                                    <p class="card-text">
                                        Aquí puedes ver un listado de las facturas, tanto de venta como de compra.
                                    </p>
                                    <a href="paginas/factura/List.php" class="btn btn-danger">
                                        Mostrar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Espacio funciones basicas-->
            <div class="collapse" id="settings">
                <div class="contenido">
                    <h3>
                        Funciones Base
                    </h3>
                    <p>
                        Aquí encontraras información que quizá te interece sin embargo te recomendamos no tocar mucho de esto y si lo haces
                        que sea con ayuda de un experto.
                    </p>
                    <ul class="list-group">
                        <li class="list-group-item" aria-disabled="true">
                            <a href="/ProyectoBases2/paginas/departamento/List.php">
                                Lista de Departamentos
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="/ProyectoBases2/paginas/ciudad/List.php">
                                Lista de Ciudades
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="/ProyectoBases2/paginas/barrio/List.php">
                                Lista de Barrios
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="/ProyectoBases2/paginas/ubicacion/List.php">
                                Lista de Direcciones
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="/ProyectoBases2/paginas/cargo/List.php">
                                Lista de Cargos
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Letrero de confirmación en cierre de sesion-->
        <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Confirmación
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                &times;
                            </span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            ¿Seguro que quieres cerrar sesión?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Cancelar
                        </button>
                        <a class="btn btn-ambar" href="/ProyectoBases2/index.html">
                            Cerrar sesión
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="/ProyectoBases2/resources/vendor/jquery/jquery.min.js"></script>
    <script src="/ProyectoBases2/resources/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="/ProyectoBases2/resources/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!--Mis scripts-->
    <script type="text/javascript" src="/ProyectoBases2/resources/js/controlBarra.js"></script>
     <script type="text/javascript" src="/ProyectoBases2/resources/js/controlFactura.js"></script>
    <script type="text/javascript" src="/ProyectoBases2/resources/js/controllerView.js"></script>
    <script type="text/javascript" src="/ProyectoBases2/resources/js/effects.js"></script>
    <script type="text/javascript" src="/ProyectoBases2/Logica/Javascript/Factura.js"></script>
</body>
</html>
