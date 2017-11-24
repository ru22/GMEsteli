@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row container-fluid">
      <section>
        <div class="wizard container-fluid">
           <div class="wizard-inner"><br>
				<div class="row"> 
		          <div class="container-fluid">
		            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
		              <h3>Lista de Grupos<small><button class="btn btn-info pull-right" data-toggle="modal" data-target="#Mimodal">Nuevo +</button></small></h3>
		             <div class="container-fluid">
		              </div>
		              <br>
		              
		              <div class="table-responsive">
		                <table id="table_est" class="display  table-hover">
		                  <thead style="background-color:#A9D0F5">
		                  <tr>
		                      <th>Nombres</th>
		                      <th>Opciones</th> 
		                    </tr>

		                     </thead>
                     		  @foreach ($user as $user)
                     		 <tr>
		                        <td>{{$user->name}}</td>
			                 	<th>
			                 		<a href="{{URL::action('asignargrupoController@edit',$user->id)}}"><button class="btn btn-info">Asignar</button></a>
			                 		<a href="" data-target=""><button class="btn btn-info" >Detalle</button>
			                 		<a href="" data-target="" data-toggle="modal"><button class="btn btn-danger" >Eliminar</button>
			                 	</th>
			                 </tr>
		          			 @endforeach
		                </table>
		              </div>
		           </div>
		         </div>
		      </div>
            </div> 
        </div>
    </section>
   </div>
</div>
@section('tablas')
        {!!Html::script('tablas/jquery.dataTables.min.js')!!}
        {!!Html::script('tablas/main.js')!!}
@endsection
@stop

