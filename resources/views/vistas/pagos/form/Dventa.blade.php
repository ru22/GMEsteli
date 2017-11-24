<div class="row">

          <div class="container-fluid">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

            <div class="row">

               <div class="col-lg-4 col-sm-2 col-md-3 col-xs-12">
                  <div class="form-group">
                    <label>Nombres del Estudiante:</label>
                    <p>{{$venta->nombrese}}</p>
                  </div> 
               </div>

               <div class="col-lg-4 col-sm-2 col-md-3 col-xs-12">
                  <div class="form-group">
                      <label>Apellidos del Estudiante:</label>
                      <p>{{$venta->apellidose}}</p>
                  </div> 
               </div>

                <div class="col-lg-4 col-sm-2 col-md-3 col-xs-12">
                  <div class="form-group">
                       <label>Numero de Comprovante:</label>
                      <p>{{$venta->num_comprovante}}</p> 
                  </div> 
               </div>
                  
            </div>

           <br>
           <br>
        <div class="row">
          <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <table id="detalles" class="table table-striped table-bordered table-condensed table-hover table table-responcive">
              <thead style="background-color:#A9D0F5">
              <tr>
                
                  <th>Producto</th>
                  <th>Forma de pago</th>
                  <th>Cantidad</th>
                  <th>Monto</th>
                  <th>Sudtotal</th>
               
              </tr>
              </thead>
              <tfoot>
                 <th></th>
                 <th></th>
                 <th></th>
                <th></th>
                 <th><h4 id="total">Total:{{$venta->total_venta}}</h4></th>



              </tfoot>
              <tbody>
            @foreach($detalle as $deta)
                <tr>
        
                
                <td>{{$deta->producto}}</td>
                 <td>{{$deta->forma}}</td>
                <td>{{$deta->cantidad}}</td>
                <td>{{$deta->monto}}</td>
                <td>{{$deta->cantidad*$deta->monto}}</td>
                  
                </tr>    
            @endforeach
            </tbody>
            </table>
          </div>
        </div>
      <a href="" target="_blank"> <button class="btn btn-info" class="pull-right">Imprimir</button></a>
      </div>
    </div>
</div>
