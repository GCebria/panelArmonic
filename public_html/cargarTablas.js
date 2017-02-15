$(document).ready(function () {

    jQuery("#sidebarProductos").click(function () {
    $("#tbl").GridUnload();
    $("#dialog").hide();
    jQuery("#tbl").jqGrid({
        url: 'productos.php',
        datatype: 'json',
        mtype: 'POST',
        colNames: ['Id', 'Nombre', 'Descripcion', 'Precio', 'Imagenes', 'Videos', 'idCategoria'],
        colModel: [
            {name: 'id', index: 'id', width: 50},
            {name: 'nombre', index: 'nombre', width: 100},
            {name: 'descripcion', index: 'descripcion', width: 250},
            {name: 'precio', index: 'precio', width: 70, align: "right"},
            {name: 'imagenes', index: 'imagenes', width: 100},
            {name: 'videos', index: 'videos', width: 100},
            {name: 'idCategoria', index: 'idCategoria', width: 100}
        ],
        pager: '#paginacion',
        rowNum: 10,
        rowList: [15, 30],
        sortname: 'id',
        sortorder: 'asc',
        viewrecords: true,
        caption: 'PRODUCTOS'
    });
    });

    jQuery("#sidebarCategorias").click(function () {
    $("#tbl").GridUnload();
    $("#dialog").hide();
    jQuery("#tbl").jqGrid({
        url: 'categorias.php',
        datatype: 'json',
        mtype: 'POST',
        colNames: ['Id', 'Nombre', 'Descripcion'],
        colModel: [
            {name: 'id', index: 'id', width: 50},
            {name: 'nombre', index: 'nombre', width: 100},
            {name: 'descripcion', index: 'descripcion', width: 250},
        ],
        pager: '#paginacion',
        rowNum: 10,
        rowList: [15, 30],
        sortname: 'id',
        sortorder: 'asc',
        viewrecords: true,
        caption: 'CATEGORIAS'
    });
    });

    jQuery("#sidebarOfertas").click(function () {
    $("#tbl").GridUnload();
    $("#tbl").empty();
    $("#dialog").hide();
    jQuery("#tbl").jqGrid({
        url: 'ofertas.php',
        datatype: 'json',
        mtype: 'POST',
        colNames: ['Id', 'Titulo', 'Descripcion', 'Ruta'],
        colModel: [
            {name: 'id', index: 'id', width: 50},
            {name: 'titulo', index: 'titulo', width: 100},
            {name: 'descripcion', index: 'descripcion', width: 250},
            {name: 'ruta', index: 'ruta', width: 70, align: "right"},
        ],
        pager: '#paginacion',
        rowNum: 10,
        rowList: [15, 30],
        sortname: 'id',
        sortorder: 'asc',
        viewrecords: true,
        caption: 'OFERTAS'
    });
    });

    jQuery("#sidebarPedidos").click(function () {
    $("#tbl").GridUnload();
    $("#tbl").empty();
    $("#dialog").hide();
    jQuery("#tbl").jqGrid({
        url: 'pedidos.php',
        datatype: 'json',
        mtype: 'POST',
        colNames: ['Id', 'idCliente', 'Fecha'],
        colModel: [
            {name: 'id', index: 'id', width: 50},
            {name: 'idCliente', index: 'idCliente', width: 100},
            {name: 'fecha', index: 'fecha', width: 250},
            
        ],
        pager: '#paginacion',
        rowNum: 10,
        rowList: [15, 30],
        sortname: 'id',
        sortorder: 'asc',
        viewrecords: true,
        caption: 'PEDIDOS'
    });
    });


//---------------------------BOTONES----------------------

    jQuery("#btnBorrar").click(function () {
       var tabla= $("#tbl").jqGrid("getGridParam", "caption");
        var r = confirm("¿Seguro que quieres eliminar el registro?");
        if (r == true) {
            var id = jQuery("#tbl").jqGrid('getGridParam', 'selrow');
            if (id) {

                var ret = jQuery("#tbl").jqGrid('getRowData', id);
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "delete.php",
                    data: {delete_id: ret.id, delete_tabla: tabla},

                });
                jQuery("#tbl").trigger("reloadGrid");
            }
            ;
            
        }
        
    });
    //--------------- NO REDIRECCIONA
    jQuery("#btnActualizar").click(function () {
    
    var id = jQuery("#tbl").jqGrid('getGridParam', 'selrow');
    if (id) {

        var ret = jQuery("#tbl").jqGrid('getRowData', id);
        $.ajax({
            type: "POST",
            dataType: "json",
            data: {id: ret.id},
            url: "formUpdateProducto.php",
            success: function(){
                window.location.href = "formUpdateProducto.php";
            }
            
        });
         
    } 
    

} );
    
    

    
    jQuery("#buttonEdit").click(function(){
        if ($("tr#"+rowid).attr("editable") === "1") {
    // the row having id=rowid is in editing mode
}
    });
    
  

}); // fin ready