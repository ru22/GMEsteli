
$(function(){ 
	

	$('#pidtipo_pago').on('change', onSelectGradosChange);
 
});

function onSelectGradosChange() {

	var pidtipo_pago = $(this).val(); 
	if (! pidtipo_pago) {
		$('#pidmes').html('<option value="">Pago</option>');
	}
	
$.get(pidtipo_pago, function (data){
			var html_select ='<option value="">Pago</option>';
			    html_select +='<option value="Enero">Enero</option>';
			    html_select +='<option value="Febrero">Febrero</option>';
			    html_select +='<option value="Marzo">Marzo</option>';   
			    html_select +='<option value="Abril">Abril</option>';
			    html_select +='<option value="Mayo">Mayo</option>';
			    html_select +='<option value="Junio">Junio</option>';
			    html_select +='<option value="Julio">Julio</option>';
			    html_select +='<option value="Agosto">Agosto</option>';
			    html_select +='<option value="Septiembre">Septiembre</option>';
			    html_select +='<option value="Octubre">Octubre</option>';
			    html_select +='<option value="Noviembvre">Noviembvre</option>';
			    html_select +='<option value="Diciembre">Diciembre</option>';
			    

			$('#pidmes').html(html_select);
		});

}

