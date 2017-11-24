$(document).ready(function(){

$('#bt_addp').click(function(){
	agregarp();
	});
});

var cont=0;
total=0;
subtotal=[];
$("#pidproducto").change(mostrarv);

function mostrarv(){

	

datosproducto=document.getElementById('pidproducto').value.split('_');
$("#pidmonto").val(datosproducto[1]);
$("#pidexistencia").val(datosproducto[2]);
if (datosproducto[2]==10 ) {

     alert("El producto se esta agotando se recomienda que ingrese mas existencias de este producto");
      }

}
function agregarp(){

    
	if (datosproducto[2]==0 ) {

     alert("Ya no hay  mas existencias de este producto");
      }

      else
       {
    datosproducto=document.getElementById('pidproducto').value.split('_');
	

	idproducto=datosproducto[0];
	producto=$("#pidproducto option:selected").text();


	idforma_pago=$("#pidforma_pago").val();
	forma=$("#pidforma_pago option:selected").text();

	idmonto=$("#pidmonto").val();

	idcantidad=$("#pidcantidad").val();
	existencias=$("#pidexistencia").val();

	


	if(idproducto!="" && idforma_pago!="" && idmonto!="" && idcantidad!="")
	{
		if (existencias >= idcantidad)
		{

			subtotal[cont]=(idcantidad*idmonto);
		     total=total+subtotal[cont];

		var fila='<tr class="selected" id="fila'+cont+'"> <td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">x</button></td><td><input type="hidden" name="idproducto[]" value="'+idproducto+'">'+producto+'</td><td><input type="hidden" name="idforma_pago[]" value="'+idforma_pago+'">'+forma+'</td><td><input type="hidden" name="idcantidad[]" value="'+idcantidad+'">'+idcantidad+'</td><td><input type="number" name="idmonto[]" value="'+idmonto+'"></td><td>'+subtotal[cont]+'</td></tr>';
					cont ++;
					$('#detalles').append(fila);
					$("#total").html("S/. " + total);
					$("#total_venta").val(total);

		}

		else
		{
         alert('No se puede proceder la venta la cantidad a vender supera las existencias del producto');

		}

		
   }

   else
   {

    alert("Error al ingresar los detalles de la venta revise los datos del producto ");
   }

  
  }
}

 function eliminar(index){

 total=total-subtotal[index];
 $ ("#total").html("S/. " + total);
 $("#total_venta").val(total);
 $ ("#fila" + index).remove();
 


 }