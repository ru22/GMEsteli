$(document).ready(function  () {
$('#seccion').click(function () {
	agre();
	});
}); 

var cont=0; 
total=0;
// $("#guardar").hide();

function agre (){
	seccion=$("#pidseccion").val();
	sec=$("#pidseccion option:selected").text();
	if (seccion !="" ) {
		
		var fila='<tr class="selected" id="fila'+cont+'"> <td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">x</button></td><td><input type="hidden" name="seccion[]" value="'+seccion+'">'+sec+'</td></tr>';
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