<div class="container-fluid">
    <div class="row container-fluid">
      <section>
        <div class="wizard container-fluid">
           <div class="wizard-inner"><br>
				<div class="row"> 
		          <div class="container-fluid">
		            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
		              <h3>Lista de Asignaturas<small><button class="btn btn-info pull-right" data-toggle="modal" data-target="#Mimodal">Nueva +</button></small></h3>
		               @include('vistas.seccion.form.modal')
		             <div class="container-fluid">
		              </div>
		              <br>
		              <div class="table-responsive">
		                <table id="table_est" class="display  table-hover">
		                  <thead style="background-color:#A9D0F5">
		                  <tr>
		                      <th>ID</th>
		                      <th>Seccion</th>
		                       <th>Grado</th>
		                       <th>Periodo</th>
		                       <th>Opcones</th>
		                    </tr>
		                  </thead>
		                  <tbody>
		                @foreach ($seccion as $sec)
		                 <tr>
		                 	<th>{{$sec->idseccion}}</th>
		                 	<th>{{$sec->seccion}}</th>
		                 	<th>{{$sec->grado}}</th>
		                 	<th>{{$sec->periodo}}</th>
		                 	<th>
		                 		<a href="" data-target="" data-toggle="modal"><button class="btn btn-info" >Editar</button>
		                 		<a href="" data-target="" data-toggle="modal"><button class="btn btn-danger" >Eliminar</button>
		                 	</th>
		                 </tr>
		                  @endforeach
		                  </tbody>
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





