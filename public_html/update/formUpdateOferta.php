<?php
$id = $_GET["updateid"];

$conexion = new mysqli("localhost", "root", "armonic", "armonic");
$query = "select *  from ofertas where id = $id";
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
        <form action="updateOferta.php?id=<?php echo $id?>" method="post" class="form-horizontal">
            <fieldset class="col-md-9">

                <!-- Form Name -->
                <legend>Actualizar Producto</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Titulo</label>  
                    <div class="col-md-4">
                        <input id="titulo" name="titulo" type="text" value="<?php echo $followingdata['titulo'] ?>" class="form-control input-md">

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
                    <label class="col-md-4 control-label" for="textinput">Ruta</label>  
                    <div class="col-md-4">
                        <input id="ruta" name="ruta" type="text" value="<?php echo $followingdata['ruta'] ?>" class="form-control input-md">

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
