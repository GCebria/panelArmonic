<? php
?>
<html>
    <head>
        <link href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="row">
            <div id="wrapper" class="col-md-3">

                <!-- Sidebar -->
                <div id="sidebar-wrapper">
                    <ul class="sidebar-nav">
                        <li class="sidebar-brand">
                            <a href="#">
                                Administrador
                            </a>
                        </li>
                        <li>
                            <a href="../index.php" id="sidebarProductos">Productos</a>
                        </li>
                        <li>
                            <a href="../index.php" id="sidebarCategorias">Categorias</a>
                        </li>
                        <li>
                            <a href="../index.php" id="sidebarOfertas">Ofertas</a>
                        </li>
                        <li>
                            <a href="../index.php" id="sidebarPedidos">Pedidos</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <form action="insertCategoria.php" method="post" class="form-horizontal">
                    <fieldset>
                        <!-- Form Name -->
                        <legend>Insert Categoria</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Nombre</label>  
                            <div class="col-md-4">
                                <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Descripcion</label>  
                            <div class="col-md-4">
                                <input id="descripcion" name="descripcion" type="text" placeholder="Descripcion" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="button1id">Acciones</label>
                            <div class="col-md-8">
                                <button id="button1id" type="submit" name="button1id" class="btn btn-success">Crear</button>
                                <button id="button2id" type="reset" name="button2id" class="btn btn-default">Atras</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
        <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../cargarTablas.js" type="text/javascript"></script>
        <script src="../main.js" type="text/javascript"></script>
    </body>
</html>
