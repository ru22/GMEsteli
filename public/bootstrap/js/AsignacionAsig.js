$(document).ready(function  () {
$('#asignaturas').click(function () {
	agregar();
	});
}); 

var cont=0; 
total=0;
// $("#guardar").hide();

function agregar (){
	asignaturas=$("#pidasignaturas").val();
	asig=$("#pidasignaturas option:selected").text();

	seccion=$("#pidseccion").val();
	if (seccion !="" ) {
		
		var fila='<tr class="selected" id="fila'+cont+'"> <td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">x</button></td><td><input type="hidden" name="asignaturas[]" value="'+asignaturas+'">'+asig+'</td></tr>';
		cont ++;
		$('#detaasig').append(fila);
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