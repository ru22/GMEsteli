 <div class="box box-primary container-fluid"> 
	<div class="row container-fluid">
		<div class="row container-fluid">
			<h2 class="cal_titulo">Lista de grupos</h2> 
		</div> 
		<div class="row">
			<div class="col-lg-2"> 
				<div class="form-group">
					<label>Periodo</label>
			        <select name="idanios" class="form-control select2" id="anios" >  <!-- onchange="listamatricula(); -->
			        	 @foreach($anios as $anios)
	                            <option value="{{$anios->idannios}}">{{$anios->periodo}}</option>
	                        @endforeach
			        </select>
	 			</div> 
		    </div>

		    <div class="col-lg-2">
		    	<div class="form-group">
		    	<label>Grados</label>
			        <select name="idanios" class="form-control select pidanio" id="grados" >
			        	 @foreach($grados as $grados)
	                        <option value="{{$grados->idgrados}}">{{$grados->grado}}</option>
	                     @endforeach                       
			        </select> 
			    </div>
		    </div>

		    <div class="col-lg-2">
		    	<div class="form-group">
		    	<label>Sección</label>
			        <select name="idanios" class="form-control pidseccion" id="seccion">
			        	 @foreach($seccions as $seccions)
	                        <option value="{{$seccions->idseccion}}">{{$seccions->seccion}}</option>
	                     @endforeach                           
			        </select>
		        </div>
		    </div>

		    <div class="col-lg-3"><br>
                 <div class="input-group">
                    <input type="text" class="form-control" id="est" placeholder="Buscar...">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat"  onclick="listamatricula();"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                 </div>         
            </div><br>
            <div class="col-lg-3">
                 <div class="input-group">

                <a href="" target="_blank"><button class="btn btn-primary" id="b2">Imprimir</button></a>
           			
           		</div>
           	</div>
	    </div>

		<div class="table-responsive"> 
	        <table class="table" id="Mytabla"> 
	       
	            <thead >
	            <tr>
	                <th>Codigo</th>
	                <th>Nombres</th>
	                <th>Apellidos</th> 
	                <th>Seccion</th>
	                <th>Periodo</th>
	                <th>grado</th>
	                <th>Turno</th>

	              </tr>

	           <tbody>

	                @foreach ($matriculas as $m)
                      <tr>
                      		<td>{{$m->codigo}}</td>
		                   	<td>{{$m->nombrese}}</td>
		                   	<td>{{$m->apellidose}}</td>
		                   	<td>{{$m->seccion}}</td>
		                   	<td>{{$m->periodo}}</td>
		                   	<td>{{$m->grado}}</td>
		                   	<td>{{$m->tuno}}</td>   
		                   	                 
                      </tr>
                 	@endforeach
                 
                 	</tbody>
                 </thead>
	        </table>
	    </div>
    </div>
   
</div>
<script>
	// SEGUNDA FUNCION PARA CARGAR LOS GRADOS DE CADA ANNIO
$('#b2').on('click',requestDescargar);

function requestDescargar(){
	tableToExcel('Mytabla','datos');
}

 
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
 </script>

@section('tablas')
        {!!Html::script('tablas/jquery.dataTables.min.js')!!}
        {!!Html::script('tablas/main.js')!!}
@endsection