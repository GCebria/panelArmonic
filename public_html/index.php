

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>Ejemplo </title>
        <link rel="stylesheet" type="text/css" media="screen" href="css/flick/jquery-ui-custom.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="jqgrid/css/ui.jqgrid.css" />


        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
    </head>


    <body>
        <div class="row">
            <div id="wrapper" class="col-md-3">

                <!-- Sidebar -->
                <div id="sidebar-wrapper">
                    <ul class="sidebar-nav">
                        <li class="sidebar-brand">
                            <a href="index.php">
                                Administrador
                            </a>
                        </li>
                        <li>
                            <a href="#" id="sidebarProductos" >Productos</a>
                        </li>
                        <li>
                            <a href="#" id="sidebarCategorias" >Categorias</a>
                        </li>
                        <li>
                            <a href="#" id="sidebarOfertas" >Ofertas</a>
                        </li>
                        <li>
                            <a href="#" id="sidebarPedidos">Pedidos</a>
                        </li>

                    </ul>
                </div>
            </div>


            <!-- Table -->
            <div class="col-md-9">
                <h1 class="text text-primary">
                    Selecciona una categoria para cargar su contenido.
                </h1>
                <table id="tbl"></table>
                <div id="paginacion"> </div>




                <br/>
                 <table id="tblDetallesPedidos"></table>
                <div id="paginacionDetallesPedidos"> </div>
                
                <div id="" class="botones">

                    <br/>
                    <a href="#" id="btnNuevo" class="btn btn-primary">Nuevo</a>
                    <a href="#" class="btn btn-primary" id="btnActualizar">Actualizar</a>
                    <a href="#" class="btn btn-primary" id="btnBorrar">Borrar</a>
                   
                </div>
            </div>

            <!-- Button trigger modal -->


            <!--        <div id="myModal" class="modal modal-fixed-footer">
            
                    </div>-->

        </div>

        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="jqgrid/js/i18n/grid.locale-es.js" type="text/javascript"></script>
        <script src="jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script> 
        <script src="cargarTablas.js" type="text/javascript"></script>
        <script src="main.js" type="text/javascript"></script>
    </body>

</html>

