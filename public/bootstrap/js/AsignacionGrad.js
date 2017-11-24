$(document).ready(function  () {
$('#grados').click(function () {
	agre_grado();
	});
}); 

var cont=0; 
total=0;
// $("#guardar").hide();

function agre_grado (){
	grados=$("#pigrados").val();
	grad=$("#pigrados option:selected").text();

	if (seccion !="" ) {
		
		var fila='<tr class="selected" id="fila'+cont+'"> <td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">x</button></td><td><input type="hidden" name="grados[]" value="'+grados+'">'+grad+'</td></tr>';
		cont ++;
		$('#detagrado').append(fila);
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