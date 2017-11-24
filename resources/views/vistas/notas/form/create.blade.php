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
								 	 <h3 class="cal_titulo">Ramon uriel Matute<small> <a href=""  target="_blank"><button class="btn btn-info pull-right"> Imprimir <span class="glyphicon glyphicon-plus"></span></button></small></h3></a>
								<div class="table-responsive container-fluid" style=" background: transparent;"> 
							        <table class="table" id="Mytabla" > 
							            <thead >
							            <tr>		                
							                <th>Asignaturas</th>
							                <th>IP</th> 
							                <th>IIP</th> 
							                <th>NS</th> 
							                <th>III</th> 
							                <th>IV</th> 
							                <th>NS</th> 
							                <th>NF</th>
							                <th>Editar</th>
							              </tr>

							           <tbody>
							               @foreach ($calificaciones as $m)
						                      <tr>
								                  <td>{{$m->nombre}}</td> 
								                   <td><input  type="number" class="form-control" name="primer[]" value="{{$m->IP}}"></td> 
								                   <td><input type="number" class="form-control" name="segundo[]" value="{{$m->IIP}}"></td>
								                   <td><input type="number" class="form-control" name="notaS[]" value="{{$m->NS}}" disabled ></td>     
								                   <td><input type="number" class="form-control" name="notaIII[]" value="{{$m->IIIP}}"></td>  
								                   <td><input type="number" class="form-control" name="notaIII[]" value="{{$m->IVP}}"></td> 
								                   <td><input type="number" class="form-control" name="notaIII[]" value="{{$m->NSS}}" disabled > </td> 
								                   <td><input type="number" class="form-control" name="notaIII[]" value="{{$m->NF}}" disabled ></td> 
								                   

								                   
								                   	<td>
								                   		<a href="" ><button class="btn btn-info">Guardar</button>
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



