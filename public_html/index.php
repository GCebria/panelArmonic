

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>Ejemplo </title>
        <link rel="stylesheet" type="text/css" media="screen" href="css/flick/jquery-ui-custom.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="jqgrid/css/ui.jqgrid.css" />


        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    </head>


    <body>

        <table id="tblproductos"></table>
        <div id="paginacion"> </div>



        <br/>
        <a href="form.php" id="btn_nuevo">Nuevo</a>

        <br/><br/>

        <div id="mensaje">

            <br/><br/>
            <a href="#" id="a1">Get data from selected row</a>
            <br />
            <a href="#" id="a2">Delete row 2</a>
            <br />
            <a href="#" id="buttonEdit">Update</a>
            <br /> 


            <br /> 
        </div>


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="cargaModal()">
            Launch demo modal
        </button>

<!--        <div id="myModal" class="modal modal-fixed-footer">

        </div>-->



        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="jqgrid/js/i18n/grid.locale-es.js" type="text/javascript"></script>
        <script src="jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script> 
        <script src="productos.js" type="text/javascript"></script>
        <script src="main.js" type="text/javascript"></script>
    </body>

</html>

