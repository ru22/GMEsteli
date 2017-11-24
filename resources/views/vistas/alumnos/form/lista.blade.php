 @if(Session::has('flash_message'))
    <div class="alert alert-danger alert-dismissible text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"> &times; </span>
        </button>

        <strong><i class="fa fa-info-circle"></i></strong>{{Session::get('flash_message')}}
                        
    </div>
                    
  @endif
<div class="row"> 
   <div class="">
          <div class="container-fluid">

            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
               
                

              <div class="table-responsive">
            
                <table id="table_est" class="display">
                  <thead > 
                      <th>codigo</th>
                      <th>Nombres </th>
                      <th>Apellidos</th>
                      <th>Procedencia</th>
                      <th>F-Nacimiento</th> 
                      <th>Sexo</th>
                        
              
                      <th>Opciones</th>
                  </thead>
                  @foreach ($estudiantes as $est)
                      <tr>
                        <th>{{$est->codigo}}</th>
                        <td>{{$est->nombrese}}</td>
                        <td>{{$est->apellidose}}</td>
                      
                        <td>{{$est->procedencia}}</td>
                        <td>{{$est->fnac}}</td>
                        <td>{{$est->sexo}}</td>
                       
                        <td>
                          <a href="" data-target="#modal2-edit-{{$est->id}}" data-toggle="modal"><button class="btn btn-info"><span class="glyphicon glyphicon-edit"></span></button>
                          <a href="" data-target="#modal1-delite-{{$est->id}}" data-toggle="modal"><button class="btn btn-danger" ><span class="glyphicon glyphicon-trash"></span></button>
                   
                        </td>
                      </tr>
                        @include('vistas.alumnos.form.modal2')
                        @include('vistas.alumnos.form.modal1')
                        @endforeach
                </table>
              </div>

         
         </div>
    </div>
</div>
@section('tablas')
        
        {!!Html::script('tablas/jquery.dataTables.min.js')!!}

        {!!Html::script('tablas/main.js')!!}
@endsection
