<div class="row">

          <div class="container-fluid">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

            <div class="row">
               <div class="col-lg-2 col-sm-2 col-md-3 col-xs-12">
                  <div class="form-group">
                      <label>Codigo:</label>
                      <p>{{$pagos->codigo}}</p>
                  </div> 
                </div>

               <div class="col-lg-2 col-sm-2 col-md-3 col-xs-12">
                  <div class="form-group">
                    <label>Nombres:</label>
                    <p>{{$pagos->nombrese}}</p>
                  </div> 
               </div>

               <div class="col-lg-2 col-sm-2 col-md-3 col-xs-12">
                  <div class="form-group">
                      <label>Apellidos:</label>
                      <p>{{$pagos->apellidose}}</p>
                  </div> 
               </div>

                <div class="col-lg-2 col-sm-2 col-md-3 col-xs-12">
                  <div class="form-group">
                      
                  </div> 
               </div>
                  
            </div>


        <div class="row">
          <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <table id="detalles" class="table table-striped table-bordered table-condensed table-hover table table-responcive">
              <thead style="background-color:#A9D0F5">
              <tr>
                
                  <th>N0</th>
                 
                  <th>Mes</th>
                  <th>Forma de pago</th>
                  <th>Cantidad</th>
                  <th>Periodo</th>
                  <th>Opciones</th>
              </tr>
              </thead>
            @foreach($detalle as $deta)
                <tr>
                 <td>{{$deta->iddetallepagos}}</td>
                
                 <td>{{$deta->mes}}</td>
                 <td>{{$deta->formato_pago}}</td>
                <td>{{$deta->monto}}</td>
                <td>{{$deta->periodo}}</td>
                  <td>
                   <a href="{{URL::action('RecivopController@show',$deta->iddetallepagos)}}" target="_blank"> <button class="btn btn-info pull-right">Imprimir</button></a>
                </td>
                </tr>    
            @endforeach
            </table>
          </div>
        </div>
        
      </div>
    </div>
</div>
