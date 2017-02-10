$(document).ready(function () {
    $("#dialog").hide();
    jQuery("#tbltareas").jqGrid({
        url: 'categorias.php',
        datatype: 'json',
        mtype: 'POST',
        colNames: ['Id', 'Nombre', 'Descripcion'],
        colModel: [
            {name: 'id', index: 'id', width: 50},
            {name: 'nombre', index: 'nombre', width: 100},
            {name: 'descripcion', index: 'descripcion', width: 250}
        ],
        pager: '#paginacion',
        rowNum: 10,
        rowList: [15, 30],
        sortname: 'id',
        sortorder: 'asc',
        viewrecords: true,
        caption: 'CATEGORIAS'
    });

//
//    $('#logoutBT').on("click", logout);
//    $("#btn_nuevo").on("click", showDialog);
//    $("#guardarBT").on("click", insertarTarea);
    jQuery("").click(function () {

        //Codigo para añadir una nueva tarea

    }); //fin btn_nuevo
//    			
}); // fin ready