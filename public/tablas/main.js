$(document).ready(function(){
   $('#table_est').DataTable();
  });

//*** funcion para agragar el pago a su detalle***///
$(document).ready(function(){
$('#bt_addp').click(function(){
	agregarp();
	});
});

var cont=0;
total=0;
subtotal=[];
function agregarp(){
	idtipo_pago=$("#pidtipo_pago").val();
	pago=$("#pidtipo_pago option:selected").text();

	idmes=$("#pidmes").val();
	mes=$("#pidmes option:selected").text();

	idforma_pago=$("#pidforma_pago").val();
	forma=$("#pidforma_pago option:selected").text();

	idmonto=$("#pidmonto").val();


	if(idtipo_pago !="" && idmes!="" && idforma_pago!="" && idmonto!="")
	{
		subtotal[cont]=(idmonto);
		total=total+subtotal[cont];

		var fila='<tr class="selected" id="fila'+cont+'"> <td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">x</button></td><td><input type="hidden" name="idmes[]" value="'+idmes+'">'+mes+'</td><td><input type="hidden" name="idtipo_pago[]" value="'+idtipo_pago+'">'+pago+'</td><td><input type="hidden" name="idforma_pago[]" value="'+idforma_pago+'">'+forma+'</td><td><input type="number" name="idmonto[]" value="'+idmonto+'"></td><td>'+subtotal[cont]+'</td></tr>';
					cont ++;
					$('#detalles').append(fila);
					$("#total").html("s/." + total);
	}
}
	
//*** fin de la funcion para agragar el pago a su detalle***/// 
//*** funcion de pago ***/// 
$(document).ready(function)(){
	("#idatricula").click(){
		$("#idmes").attr("disabled",false);
		pidmes
	});

});
//*** fin de funcion pago ***/// 