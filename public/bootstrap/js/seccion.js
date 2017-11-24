$(document).ready(function  () {
$('#seccion').click(function () {
	agregarp();
	});
}); 

var cont=0; 
total=0;
// $("#guardar").hide();

function agre (){
	
	seccion=$("#pidseccion").val();
	if (seccion !="" ) {
		
		var fila='<tr class="selected" id="fila'+cont+'"> <td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">x</button></td><td><input type="hidden" name="pidseccion[]" value="'+seccion+'">'+seccion+'</td></tr>';
		cont ++;
		$('#deta').append(fila);
		limpiar();
	}
}

function limpiar () {
	$("#pidseccion").val("");
}
function evaluar () {
	if (total>0) {
		$("#guardar").show();
	}
	else{

		$("#guardar").hide(); 
	}
}
function eliminar (index) {
	$("#fila"+index).remove();
}