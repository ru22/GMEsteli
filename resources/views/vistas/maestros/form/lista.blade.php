 <div class="row container-fluid"> 
    <div class="box box-primary container-fluid"> 
          <div class="container-fluid"> 
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

               @if(Session::has('flash_message'))
                <div class="alert alert-success alert-dismissible text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true"> &times; </span>
                  </button>

                  <strong><i class="fa fa-info-circle"></i></strong>{{Session::get('flash_message')}}
                        
                </div>
                    
              @endif
              <h3> Lista de Maestros<small><button class="btn btn-info pull-right" data-toggle="modal" data-target="#Mimodal">Nuevo +</button></small></h3>
               @include('vistas.maestros.form.modal')
             <div class="container-fluid">
              </div>
              
              <br>
              <div >
                <table class="table table-responsive">
                  <thead >
                  <tr>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Telefono</th>
                      <th>Cedula</th>
                      <th>Sexo</th>
                     <th>Opciones</th> 
                    </tr>
                  </thead>
                 
                  @foreach ($maestros as $maes)
                      <tr>
                        <td>{{$maes->nombres}}</td>
                        <td>{{$maes->apellidos}}</td>
                         <td>{{$maes->telefono}}</td>
                         <td>{{$maes->cedula}}</td>
                         <td>{{$maes->sexo}}</td>
                        <td>
                             <a href="" data-target="#modal1-edit-{{$maes->id}}" data-toggle="modal"><button class="btn btn-info">Editar</button>
                             <a href="" data-target="#modal2-delete-{{$maes->id}}" data-toggle="modal"><button class="btn btn-danger" >Eliminar</button>
                        </td>
                      </tr>
                      @include('vistas.maestros.form.modal1')
                       @include('vistas.maestros.form.modal2')
                  @endforeach
                </table>

              </div>
           </div>
         </div>
      </div> 
</div> 
@section('tablas')   
    {!!Html::script('bootstrap/js/maskedinput.js')!!} 
    {!!Html::script('bootstrap/js/main.js')!!}
@endsection