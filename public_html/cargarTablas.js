$(".botones").hide();

jQuery("#sidebarProductos").click(function () {
    $("#tbl").GridUnload();
    $("#tblDetallesPedidos").GridUnload();

    $("#dialog").hide();
    jQuery("#tbl").jqGrid({
        url: 'tablas/productos.php',
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

    $(".botones").show();
    $(".text").hide();
    $(".botones").attr("id", "Producto");

});

jQuery("#sidebarCategorias").click(function () {
    $("#tbl").GridUnload();
    $("#tblDetallesPedidos").GridUnload();

    $("#dialog").hide();
    jQuery("#tbl").jqGrid({
        url: 'tablas/categorias.php',
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
    $(".botones").show();
    $(".text").hide();

    $(".botones").attr("id", "Categoria");


});

jQuery("#sidebarOfertas").click(function () {
    $("#tbl").GridUnload();
    $("#tblDetallesPedidos").GridUnload();

    $("#tbl").empty();
    $("#dialog").hide();
    jQuery("#tbl").jqGrid({
        url: 'tablas/ofertas.php',
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
    $(".botones").show();
    $(".text").hide();

    $(".botones").attr("id", "Oferta");

});

jQuery("#sidebarPedidos").click(function () {
    $("#tbl").GridUnload();
    $("#tblDetallesPedidos").GridUnload();
    $("#tbl").empty();
    $("#dialog").hide();
    jQuery("#tbl").jqGrid({
        url: 'tablas/pedidos.php',
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
        multiselect: false,
        caption: 'PEDIDOS',
        onSelectRow: function (ids) {
		if(ids === null) {
			ids=0;
			if(jQuery("#tblDetallesPedidos").jqGrid('getGridParam','records') >0 )
			{
				jQuery("#tblDetallesPedidos").jqGrid('setGridParam',{url:"tablas/detallespedidos.php?id="+ids,page:1});
				jQuery("#tblDetallesPedidos").jqGrid('setCaption',"Detalles pedido: "+ids)
				.trigger('reloadGrid');
			}
		} else {
			jQuery("#tblDetallesPedidos").jqGrid('setGridParam',{url:"tablas/detallespedidos.php?id="+ids,page:1});
			jQuery("#tblDetallesPedidos").jqGrid('setCaption',"Detalles pedido: "+ids)
			.trigger('reloadGrid');			
		}
       
        }
    });
    $(".botones").hide();
    $(".text").hide();

    $(".botones").attr("id", "Pedido");

    jQuery("#tbl").jqGrid('navGrid', '#paginacion', {add: false, edit: false, del: false});

    jQuery("#tblDetallesPedidos").jqGrid({
        url: 'tablas/detallespedidos.php',
        datatype: 'json',
        mtype:'POST',
        colNames: ['IdPedido', 'idProducto', 'Precio', 'Fecha'],
        colModel: [
            {name: 'id', index: 'id', width: 50},
            {name: 'idProducto', index: 'idProducto', width: 100},
            {name: 'precio', index: 'precio', width: 100},
            {name: 'fecha', index: 'fecha', width: 250},
        ],
        pager: '#paginacionDetallesPedidos',
        rowNum: 10,
        rowList: [15, 30],
        sortname: 'id',
        sortorder: 'asc',
        viewrecords: true,
        caption: 'DETALLES PEDIDOS'
    });
});


//---------------------------BOTONES----------------------

jQuery("#btnBorrar").click(function () {
    var tabla = $("#tbl").jqGrid("getGridParam", "caption");
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

jQuery("#btnActualizar").click(function () {
    var direccion = $(".botones").attr("id");


    var id = jQuery("#tbl").jqGrid('getGridParam', 'selrow');
    if (id) {

        var ret = jQuery("#tbl").jqGrid('getRowData', id);
        var redireccion = "update/formUpdate" + direccion + ".php?updateid=" + ret.id;
        location.assign(redireccion);
    }
});

jQuery("#btnNuevo").click(function () {
    var direccion = $(".botones").attr("id");
    var redireccion = "insert/formInsert" + direccion + ".php";
    location.assign(redireccion);

});



