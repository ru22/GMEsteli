$(document).ready(function(){
	
   $('#table_est').DataTable();

   
  }); 


function cargargrados (listado){ // funcion de lista de grados cargar todos 

	if (listado ==1 ) {var url="grados";}
	if (listado==3) { var url="notas";}
	$("#prin").html($("#lista").html());

	$.get(url,function(resul){

		$("#prin").html(resul);
	})
}

function buscargrado(){  //funcion filtros de grados 
	var anios=$("#select_filtro").val();
	var dato=$("#grados").val();
	var dato=$("#dato").val();
	
	if (dato =="") 
	{
		var url="buscar_grado/"+anios+"";

	}else
	{
		var url="buscar_grado/+"+anios+"/"+dato+"";

	}
		
	$("#prin").html($("#car").html());
	$.get(url,function(resul){
		$("#prin").html(resul);
	})
} 

$(document).on("submt","form_emtrada",function (e) { // funcion para atrapar los formularios 
	// funcion para atrapar todos los formularos 

	e.prevenDefaul();
	$('html,body').animate({scrollTop:'0px'},200);

	var formu=$(this);
	var quien=$(this).attr("id");

	if (quien=="nevo_grado") {var varurl="grados"; var divresul="notificacion_resul_fanu;"};
	$("#"+divresul+"").html($("#car").html());
	$.ajax({
		type:"POST",
		url:varurl,
		datatype:'jeyson',
		data:formu.serialize(),
		success:function(resul){
			$("#"+divresul+"").html(resul);
			$('#'+quien+'').trigger("reset");
		}
	});
})

function cargarlistamatricula(listado){ //funcin par cargar el listado de los matriculados 
	if(listado==2) { var url="lista";}
	
	$("#prin").html($("#car").html());

	$.get(url,function(resul){

		$("#prin").html(resul); 
	})
}

  function listamatricula(){ // funcion de busqueda de estudintes matrículados 
	var anios=$("#anios").val();
	var grados=$("#grados").val();
	var seccion=$("#seccion").val();
	var dato=$("#est").val();

	if (dato =="") {
		var url="buscar_est/"+anios+"/"+grados+"/"+seccion+"/";
	}else{
		var url="buscar_est/"+anios+"/"+grados+"/"+seccion+"/"+dato+"/";
	}

	$("#prin").html($("#car").html());
	$.get(url,function(resul){
	$("#prin").html(resul);
	})
}

function listagrupos(){ // funcion de busqueda de grupos

	var anios=$("#anios").val();
	var grados=$("#grados").val();
	var seccion=$("#seccion").val();
	var dato=$("#est").val();

	if (dato =="") {
		var url="buscar_grupo/"+anios+"/"+grados+"/"+seccion+"/";
	}else{
		var url="buscar_grupo/"+anios+"/"+grados+"/"+seccion+"/"+dato+"/"; 
	}

	$("#prin").html($("#car").html()); 
	$.get(url,function(resul){
	$("#prin").html(resul);
	})
	
}

// funcin para buscar los grupos de tutores
function lis(){
	var asig=$("#asignaturas").val();
	var url="buscar_nota/"+asignaturas+"";

	$("#inicio").html($("#ini").html());
	$.get(url,function(resul){
	$("#inicio").html(resul);
	}) 
}
//fin de busqueda de tutores


// funcin para exportal a exel 

var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()

// funcion para cargar listado de estudiantes con notas

 