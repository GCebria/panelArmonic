$(document).ready(function () {

    $("#dialog").hide();
    jQuery("#tblproductos").jqGrid({
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

//			$('#logoutBT').on("click",logout);
//			$("#btn_nuevo").on("click",showDialog);
//			$("#guardarBT").on("click",insertarTarea);
//			jQuery("").click( function(){ 			
//
//							//Codigo para añadir una nueva tarea
//				
//				}); //fin btn_nuevo
//    			

//jQuery("#a1").click( function(){
//	var id = jQuery("#tblproductos").jqGrid('getGridParam','selrow');
//	if (id)	{
//           
//		var ret = jQuery("#tblproductos").jqGrid('getRowData',id);
//		 $ajax({
//                     type:"POST",
//                     url: deleteproducto.php,
//                     data:ret.id,
//                 });
//	} else { alert("Por favor, selecciona una columna");}
//});

    jQuery("#a2").click(function () {
        var r = confirm("¿Seguro que quieres eliminar el registro?");
        if (r == true) {
            var id = jQuery("#tblproductos").jqGrid('getGridParam', 'selrow');
            if (id) {

                var ret = jQuery("#tblproductos").jqGrid('getRowData', id);
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "delete.php",
                    data: {delete_id: ret.id, delete_tabla: "productos"},

                });
            }
            ;
            jQuery("#tblproductos").trigger("reloadGrid");
        }
    });
    
    jQuery("#a3").click(function () {
        var su = jQuery("#tblproductos").jqGrid('setRowData', 11, {amount: "333.00", tax: "33.00", total: "366.00", note: "<img src='images/user1.gif'/>"});
        if (su)
            alert("Succes. Write custom code to update row in server");
        else
            alert("Can not update");
    });
    jQuery("#a4").click(function () {
        var datarow = {id: "99", invdate: "2007-09-01", name: "test3", note: "note3", amount: "400.00", tax: "30.00", total: "430.00"};
        var su = jQuery("#list5").jqGrid('addRowData', 99, datarow);
        if (su)
            alert("Succes. Write custom code to add data in server");
        else
            alert("Can not update");
    });
    
    jQuery("#buttonEdit").click(function(){
        if ($("tr#"+rowid).attr("editable") === "1") {
    // the row having id=rowid is in editing mode
}
    });
    
  

}); // fin ready