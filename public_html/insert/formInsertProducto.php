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
                <form action="insertProductos.php" method="post" class="form-horizontal">
                    <fieldset>
                        <!-- Form Name -->
                        <legend>Insert Pedido</legend>

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

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Precio</label>  
                            <div class="col-md-4">
                                <input id="precio" name="precio" type="text" placeholder="precio" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="year">Imagen</label>
                            <div class="col-md-4">
                                <input id="imagen" name="imagen" type="text" placeholder="imagen" class="form-control input-md">

                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label" for="passwordinput">Videos</label>
                            <div class="col-md-4">
                                <input id="videos" name="videos" type="text" placeholder="videos" class="form-control input-md">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="passwordinput">idCategoria</label>
                            <div class="col-md-4">
                                <input id="idCategoria" name="idCategoria" type="text" placeholder="idCategoria" class="form-control input-md">

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
