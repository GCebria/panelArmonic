$(document).ready(function(){
			$("#dialog").hide();
           jQuery("#tbltareas").jqGrid({
                    url:'pedidos.php',
                    datatype: 'json',
                    mtype: 'POST',
                    colNames:['idPedido','idCliente','fecha'],
                    colModel:[
                        {name:'idPedido', index:'idPedido', width:50},
                        {name:'idCliente', index:'idCliente', width:100},
                        {name:'fecha', index:'fecha', width:250}
                        ],
                        
                    pager: '#paginacion',
                    rowNum:10,
                    rowList:[15,30],
                    sortname: 'id',
                    sortorder: 'asc',
                    viewrecords: true,
                    caption: 'PRODUCTOS'
                });              
            
//			$('#logoutBT').on("click",logout);
//			$("#btn_nuevo").on("click",showDialog);
//			$("#guardarBT").on("click",insertarTarea);
			jQuery("").click( function(){ 			

							//Codigo para añadir una nueva tarea
				
				}); //fin btn_nuevo
//    			
		}); // fin ready