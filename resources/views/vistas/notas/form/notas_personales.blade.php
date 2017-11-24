@extends('layouts.admin')
@section('content')
	<div class="container-fluid">
	    <div class="row container-fluid">
	      <section> 
	        <div class="wizard container-fluid"> 
	          <div class="wizard-inner" ><br>
					<div class="row container-fluid">
					 	<div class="box box-primary container-fluid">
								<div class="row container-fluid">
								 	 <h3 class="cal_titulo"><p></p><small> <a href=""  target="_blank"></small></h3></a>
								<div class="table-responsive container-fluid" style=" background: transparent;">
								@foreach($matriculas as $matriculas)
									<h3 class="cal_titulo">{{$matriculas->nombrese}} {{$matriculas->apellidose}}</h3>
									<a href="{{URL::action('NotashController@show',$matriculas->id)}}" target="_blank"> <button class="btn btn-info pull-right">Imprimir</button></a> 	
								@endforeach
							        <table class="table" id="Mytabla" > 
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
							                <th>Editar</th> 
							              </tr>

							           <tbody> 
      										@foreach($calificaciones as $calificaciones)
							                    <tr>	
							                    	
							                    	<td>{{$calificaciones->nombre}}</td>  				             
									                <td> {{$calificaciones->IP}}</td>
									                <td>{{$calificaciones->IIP}}</td>
									                <td> {{$calificaciones->NS}}</td>
									                <td> {{$calificaciones->IIIP}}</td>
									                <td>{{$calificaciones->IVP}}</td>
									                <td> {{$calificaciones->NSS}}</td>
									                <td> {{$calificaciones->NF}}</td>
									                <td>
									                	 <a href="" data-target="#modal-edit-{{$calificaciones->id}}" data-toggle="modal"><button class="btn btn-info"><span class="glyphicon glyphicon-edit"></span></button>
									                   
									                </td>
									                   
							                    </tr>
							                @include('vistas.notas.form.modal')
						                 	@endforeach
						                 	
						                 	</tbody>
						                 </thead>

							        </table>
							     
						   		</div>
						   
							</div>
						</div>
					</div>
	        	</div>
	      </section>
	    </div>
	</div>
@stop

@section('scripts')
        {!!Html::script('tablas/main2.js')!!}
        {!!Html::script('tablas/main.js')!!}
@endsection
