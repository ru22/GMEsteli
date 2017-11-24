<div class="row"> 

          <div class="container-fluid">

            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                
                 
              <div class="table-responsive">
                <table id="table_est" class="display">
                  <thead style="background-color:#A9D0F5">
                      <th>Fecha</th>
                                  <th>Nombres</th>
                                  <th>Apellidos</th>
                                  <th>Comprovante</th>
                                  <th>Total</th>
                                  <th>Opciones</th>
                      
              
                    
                  </thead>
                  @foreach ($venta as $vest)
                      <tr>
                                <td>{{$vest->created_at}}</td>
                                <td>{{$vest->nombrese}}</td>
                                <td>{{$vest->apellidose}}</td>
                                <td>{{$vest->num_comprovante}}</td>
                                <td>{{$vest->total_venta}}</td>
           
                        <td>
                         <a href="{{URL::action('VentaController@show',$vest->id)}}}" ><button class="btn btn-info">Detalles</button>
                         <a href="{{URL::action('RvController@show',$vest->id)}}" target="_blank"> <button class="btn btn-info pull-right">Imprimir</button></a>
                        </td>
                                      
                      </tr>
                       
                        @endforeach
                </table>
              </div>

         
         </div>
 
</div>
@section('tablas')
        
        {!!Html::script('tablas/jquery.dataTables.min.js')!!}
        {!!Html::script('tablas/main.js')!!}
@endsection





                                  
                             
