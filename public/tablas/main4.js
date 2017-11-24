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

	idperiodo=$("#pidperiodo").val();
	periodo=$("#pidperiodo option:selected").text();
	if(idmes!="" && idforma_pago!="" && idmonto!="" && idperiodo!="")
	{
		subtotal[cont]=(idmonto/1);
		total=total+subtotal[cont];

		var fila='<tr class="selected" id="fila'+cont+'"> <td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">x</button></td><td><input type="hidden" name="idperiodo[]" value="'+idperiodo+'">'+periodo+'</td><td><input type="hidden" name="idmes[]" value="'+idmes+'">'+mes+'</td><td><input type="hidden" name="idforma_pago[]" value="'+idforma_pago+'">'+forma+'</td><td><input type="number" name="idmonto[]" value="'+idmonto+'"></td><td>'+subtotal[cont]+'</td></tr>';
					cont ++;
					$('#detalles').append(fila);
					$("#total").html("S/. " + total);
	}



}

 function eliminar(index){

 total=total-subtotal[index];
 $ ("#total").html("S/. " + total);
 $ ("#fila" + index).remove();
 


 }