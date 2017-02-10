$(document).ready(function () {
    $("#dialog").hide();
    jQuery("#tbltareas").jqGrid({
        url: 'usuarios.php',
        datatype: 'json',
        mtype: 'POST',
        colNames: ['id', 'user', 'nombre', 'apellidos', 'direccion', 'pass'],
        colModel: [
            {name: 'id', index: 'id', width: 50},
            {name: 'user', index: 'user', width: 100},
            {name: 'nombre', index: 'nombre', width: 250},
            {name: 'apellidos', index: 'apellidos', width: 250},
            {name: 'direccion', index: 'direccion', width: 70},
            {name: 'pass', index: 'pass', width: 70}
        ],
        pager: '#paginacion',
        rowNum: 10,
        rowList: [15, 30],
        sortname: 'id',
        sortorder: 'asc',
        viewrecords: true,
        caption: 'USUARIOS'
    });
//        $('#logoutBT').on("click", logout);
//        $("#btn_nuevo").on("click", showDialog);
//        $("#guardarBT").on("click", insertarTarea);
    jQuery("").click(function () {

//Codigo para añadir una nueva tarea

    }); //fin btn_nuevo
//    			
});
