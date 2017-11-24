function  buscar_nota() {

	var grado=$(".grados").val();
	var asignaturas=$(".asignaturas").val();
	var secc=$(".seccion").val();
	 
	location.href="buscar_nota/"+grado+"/"+asignaturas+"/"+secc+"/";
}

$(function() {
	$('.grados_usuario').on('change',buscar_grado)
});

function buscar_grado() {
	var grado = $(this).val();

	location.href='/select/grados/'+grado;
} 

function  buscar_estado () {
	var seccion=$(".seccion").val();
	var grado=$(".grados").val();
	location.href="/select/estado/"+seccion+"/"+grado+"/";
}
