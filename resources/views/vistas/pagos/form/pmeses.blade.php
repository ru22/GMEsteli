<div class="box box-primary container-fluid"> 
	<div class="row container-fluid">
		<div class="row container-fluid">
			<h2>Lista de grupos</h2> 
		</div>
		<div class="row">
			<div class="col-lg-2">
				<div class="form-group">
					<label>Periodo</label>
			        <select name="idanios" class="form-control" id="anios">  <!-- onchange="listamatricula(); -->
			        	 @foreach($anios as $anios)
	                            <option value="{{$anios->idannios}}">{{$anios->periodo}}</option>
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
	        <!-- id="tabla" tabla anterior  -->
	            <thead >
	            <tr>
	                
                    <td>idpagos</td>
	                <td>Codigo</td>
	                 <td>nombres</td>
	                <td>apellidos</td>
	                <td>mes</td>
	                <td>forma</td> 
	                <td>monto</td>
	                <td>Periodo</td>

	        

	              </tr>

	           <tbody>
	                @foreach ($detalle as $m)
                      <tr>
                      		<td>{{$m->pagos_id}}</td>
		                     <td>{{$m->codigo}}</td>
		                      <td>{{$m->nombrese}}</td>
		                       <td>{{$m->apellidose}}</td>
		                    <td>{{$m->mes}}</td>
		                    <td>{{$m->formato_pago}}</td>

		                    <td>{{$m->monto}}</td>
		                    <td>{{$m->periodo}}</td>
		                                        
                      </tr>
                 	@endforeach
                 	</tbody>
                 </thead>
	        </table>
	    </div>
    </div>
   
</div>
<script>

$('#b2').on('click',requestDescargar);

function requestDescargar(){
	tableToExcel('Mytabla','datos');
}

// 	$(document).ready(function(){
	
// 	$("#b2").click(function(){
// 	$("td").each(function(){
// 	console.log($(this).text())
// 	 });
// 	});
// }); 

// </script>

@section('tablas')
        {!!Html::script('tablas/jquery.dataTables.min.js')!!}
        {!!Html::script('tablas/main.js')!!}
@endsection