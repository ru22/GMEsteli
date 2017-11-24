
	<div class="row  titulo">
		<div class="col-md-4"> 
			<div class="form-group">   
				@foreach($matriculas as $matri)
					<span><h5>Codigo: {{$matri->codigo}}</h5> </span>
				@endforeach 
			</div>
		</div>
		<div class="col-md-6"> 
			<div class="form-group">   
				@foreach($matriculas as $matri)
				    <span><h5 >Nombres: {{$matri->nombrese}}  {{$matri->apellidose}}</h5></span>
				 @endforeach 
			</div>
		</div>

	    <div class="col-md-5"> 
	    	<div class="form-group">   
		        <h5>Colegio: Hermann Gmeiner-Estelí</h5>
		    </div>
		</div>
	</div>
	<div class="row">
			<div class="form-group">   
				<div class="col-md-3">
	               <label>Filtro</label>
	                  <select name="grados" class="form-control grados_usuario">
	                      @foreach($grados as $grados)
	                        <option value="{{$grados->id}}" @if($grados->id==auth()->user()->select_grados_id) selected @endif>{{$grados->grado}}</option>
	                      @endforeach 
	                  </select> 

	        	</div>
	        	<div class="form-group">   
					<div class="col-md-1">
			        	@foreach($matriculas as $matriculas)
						<h3 class="cal_titulo"></h3>
						<a href="{{URL::action('NotashController@show',$matriculas->id)}}" target="_blank"> <button class="btn btn-info pull-right">Imprimir</button></a> 	
						@endforeach
					</div>
				</div>
	        </div>
	</div>

	    <table class="table table-striped" id="Mytabla" > 
			<thead >
						<tr>	                     
							<th>Asignaturas</th>
							<th>IP</th> 
							<th>IIP</th>
							<th>NS</th>
							<th>IIIP</th>
							<th>IVP</th>
							<th>NS</th> 
							<th>NF</th>       
						</tr>

						<tbody> 
		      				@foreach($calificaciones as $calificaciones)
								<tr>	                 	
									<td>{{$calificaciones->nombre}}</td>  				             
									<td>{{$calificaciones->IP}}</td>
									<td>{{$calificaciones->IIP}}</td>
									<td>{{$calificaciones->NS}}</td>
									<td>{{$calificaciones->IIIP}}</td>
									<td>{{$calificaciones->IVP}}</td>
									<td>{{$calificaciones->NSS}}</td>
									<td>{{$calificaciones->NF}}</td>	                   
								</tr>
							@endforeach
								                 	
						</tbody>
			</thead>
		</table>


@section('scripts')
      {!!Html::script('bootstrap/js/notas.js')!!}
@endsection