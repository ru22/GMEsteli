<div class="row"> 

          <div class="container-fluid">

            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                
                 
              <div class="table-responsive">
                <table id="table_est" class="display">
                  <thead style="background-color:#A9D0F5">
                      <th>codigo</th>
                      <th>Nombres </th>
                      <th>Apellidos</th>
                      <th>Procedencia</th>
                      <th>F.Nacimiento</th>
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
                 
                        <a href="" data-target="#modal2-edit-{{$est->id}}" data-toggle="modal"><button class="btn btn-success pull-right">Canselar Matricula</button>
                                      
                      </tr>
                       @include('vistas.pagos.modal1')  
                        @endforeach
                </table>
              </div>

         
         </div>
 
</div>
@section('tablas')
        
        {!!Html::script('tablas/jquery.dataTables.min.js')!!}
        {!!Html::script('tablas/main.js')!!}
@endsection