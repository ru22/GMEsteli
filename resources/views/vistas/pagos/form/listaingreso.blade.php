<div class="row"> 

          <div class="container-fluid">

            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                
                 
              <div class="table-responsive">
                <table id="table_est" class="display">
                  <thead style="background-color:#A9D0F5">
                     
                                  <th>ID</th>
                                  <th>Producto</th>
                                  <th>cantidad</th>
                                  <th>fecha</th>
                                  
                              
                      
              
                    
                  </thead>
                  @foreach ($ingreso as $i)
                      <tr>
                                
                                <td>{{$i->id}}</td>
                                <td>{{$i->descripcion}}</td>
                                <td>{{$i->cantidad}}</td>
                                <td>{{$i->fecha}}</td>
           
                        
                                      
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





                                  
                             
