$(document).ready(function  () {
$('#asignatura').click(function () {
	agregarp();
	});
});

var cont=0;
total=0;
// $("#guardar").hide();

function agregarp (){
	asignaturas=$("#asignaturas").val();
	if (asignaturas !="" ) {
		
		var fila='<tr class="selected" id="fila'+cont+'"> <td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">x</button></td><td><input type="hidden" name="asignaturas[]" value="'+asignaturas+'">'+asignaturas+'</td></tr>';
		cont ++;
		$('#detalle').append(fila);
		limpiar();
	}

	function limpiar () {
	$("#asignaturas").val("");
	}

	function evaluar () {
	if (total>0) {
		$("#guardar").show(); 
	}
	else{

		$("#guardar").hide(); 
	}
}
}



function eliminar (index) {
	$("#fila"+index).remove();
}