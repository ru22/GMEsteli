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
								 	 <h3 class="cal_titulo">Lista de estudinates<small> <a href=""  target="_blank"></small></h3></a>
								<div class="table-responsive container-fluid" style=" background: transparent;"> 
							        <table class="table" id="Mytabla" > 
							            <thead >
							            <tr>		                
							                <th>Nombres</th> 
							                <th>Apellidos</th> 
							                <th>Editar</th>
							              </tr>

							           <tbody>
							               @foreach ($matriculas as $m)
						                      <tr>
								                 
								                   <td>{{$m->nombrese}}</td> 
								                   <td>{{$m->apellidose}}</td>
								                   	<td>
								                   		<a href="{{URL::action('notasController@show',$m->id)}}"><button class="btn btn-info">Ver <span class="glyphicon glyphicon-eye-open"></span></button>
								                   	</td>    
						                      </tr>

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
