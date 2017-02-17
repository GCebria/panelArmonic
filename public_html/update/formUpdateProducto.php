<?php
$id = $_GET["updateid"];

$conexion = new mysqli("localhost", "root", "armonic", "armonic");
$query = "select *  from productos where id = $id";
$result = $conexion->query($query);
$followingdata = $result->fetch_assoc();
?>

<html>
    <head>
        <link href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/main.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
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
        <form action="updateProductos.php?id=<?php echo $id?>" method="post" class="form-horizontal">
            <fieldset class="col-md-9">

                <!-- Form Name -->
                <legend>Actualizar Producto</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Nombre</label>  
                    <div class="col-md-4">
                        <input id="nombre" name="nombre" type="text" value="<?php echo $followingdata['nombre'] ?>" class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->


                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Descripcion</label>  
                    <div class="col-md-4">
                        <input id="descripcion" name="descripcion" type="text" value="<?php echo $followingdata['descripcion'] ?>" class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Precio</label>  
                    <div class="col-md-4">
                        <input id="precio" name="precio" type="text" value="<?php echo $followingdata['precio'] ?>" class="form-control input-md">

                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="year">Imagen</label>
                    <div class="col-md-4">
                        <input id="imagen" name="imagen" type="text" value="<?php echo $followingdata['imagenes'] ?>" class="form-control input-md">

                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label" for="passwordinput">Videos</label>
                    <div class="col-md-4">
                        <input id="videos" name="videos" type="text" value="<?php echo $followingdata['videos'] ?>" class="form-control input-md">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="passwordinput">idCategoria</label>
                    <div class="col-md-4">
                        <input id="idCategoria" name="idCategoria" type="text" value="<?php echo $followingdata['idCategoria'] ?>" class="form-control input-md">

                    </div>
                </div>



                <!-- Button (Double) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="button1id">Acciones</label>
                    <div class="col-md-8">
                        <button id="button1id" type="submit" name="button1id" class="btn btn-success">Actualizar</button>
                        <button id="button2id" type="reset" name="button2id" class="btn btn-default">Atras</button>
                    </div>
                </div>

            </fieldset>
        </form>

        <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../cargarTablas.js" type="text/javascript"></script>
        <script src="../main.js" type="text/javascript"></script>
    </body>
</html>
