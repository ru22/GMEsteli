<div class="row"> 

          <div class="container-fluid">

            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
               <div class="container-fluid">
                  <h3> Lista de Productos<small><button class="btn btn-info pull-right" data-toggle="modal" data-target="#Mimodal">Nuevo</button></small></h3>
                 <button class="btn btn-info pull-right" data-toggle="modal" data-target="#modal3">+ Productos</button>
                  @include('vistas.productos.form.modal1') 
                   @include('vistas.productos.form.modal3')            
                 </div><br>
              <div class="table-responsive">
                <table id="table_est" class="display">
                  <thead style="background-color:#A9D0F5">
                      <th>ID</th>
                      <th>Nombre </th>
                      <th>Precio</th>
                      <th>Existencias</th>
                      <th>Opciones</th>
                      
              
                      
                  </thead>
                  @foreach ($producto as $est)
                      <tr>
                        <th>{{$est->id}}</th>
                        <td>{{$est->descripcion}}</td>
                        <td>{{$est->precio}}</td>
                        <td>{{$est->existencia}}</td>
                      
                        
                         <td>
                          <a href="" data-target="#modal2-edit-{{$est->id}}" data-toggle="modal"><button class="btn btn-info">Ed</button>
                   
                        </td>
                        
                      </tr>
                        @include('vistas.productos.form.modal2')
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