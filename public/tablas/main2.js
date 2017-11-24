//FUNCION PARA CARGAR LS SECCIONES DE CADA AÑO ELECTIVO DE CADA ESTUDIANTE 
$(function(){ 

	$('.select').on('change', onSelectGradosChange);
 
});

function onSelectGradosChange() { 

	var pidanio = $(this).val(); 

	if (! pidanio) {
		$('.pidseccion').html('<option value="">seleccione seccion</option>');
	}
	
$.get('/api/grados/'+pidanio+'/seccions', function (data){
			var html_select ='<option value="">seleccione seccion</option>';
			for (var i = 0; i < data.length; ++i) 
				html_select +='<option value="'+data[i].idseccion+'">'+data[i].seccion+'</option>'; 
			
			$('.pidseccion').html(html_select);
		});
}
//-----------------------------FIN DE LA FUNCION CARGAR SECCIONES---------------------------//


					// SEGUNDA FUNCION PARA CARGAR LOS GRADOS DE CADA ANNIO
$(function(){ 

	$('.select2').on('change', onSelectAnniosChange); 
 
});
function onSelectAnniosChange (){
	var pidperiodo = $(this).val();
	
	$.get('/api/periodo/'+pidperiodo+'/grados', function (data){
		var html_select ='<option value="">seleccione grados</option>';
		for (var i = 0; i < data.length; ++i) 
		html_select +='<option value="'+data[i].idgrados+'">'+data[i].grado+'</option>'; 
			$('.pidanio').html(html_select);
		});
}

