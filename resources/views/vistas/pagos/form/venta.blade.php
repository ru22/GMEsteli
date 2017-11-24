 {!!Form::open(['route'=>'venta.store','method'=>'POST'])!!}
  {{Form::Token()}}
<div class="container-fluid">
<div class="row">

<div class="col-lg-2 col-sm-12 col-md-3 col-xs-12">
          <div class="form-group">
              <label>N0:</label>
             <input type="text" name="pidcomprovante"  class="form-control"  placeholder="Numero de recivo">
           </div>
  </div>

<div class="">
      <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12">
          <div class="form-group">
             <label>Estudiante:</label>
              <select name="pidestudiantes" class="form-control selectpicker" data-live-search="true">
                 
                 @foreach($estudiantes as $estudiantes)
                  <option value="{{$estudiantes->id}}">{{$estudiantes->nombrese}}</option>
                @endforeach
                  
              </select>
          </div>
           
      </div>
  </div>

  <div class="">
      <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12">
          <div class="form-group">
             <label>Productos:</label>
              <select name="pidproducto" class="form-control" id="pidproducto" data-live-search="true">
                  <option value="">Seleccione Producto</option>
                 @foreach($producto as $producto)
                  <option value="{{$producto->id}}_{{$producto->precio}}_{{$producto->existencia}}">{{$producto->descripcion}}</option>
                @endforeach
                  
              </select>
          </div>
           
      </div>
  </div>  
 
</div>
<div class="row">


  <div class="panel panel-primary ">
  <div class="panel-body">

        

   <div class="col-lg-3 col-sm-12 col-md-3 col-xs-12">
      <div class="form-group">
        <label>Forma de pago:</label>
          <select name="pidforma_pago" id="pidforma_pago" class="form-control" data-live-search="true" id="turno">
            <option value="Efectivo">Efectivo</option>
            <option value="Cheque">Cheque</option>
           
          </select>
        </div>
      </div>

       
         <div class="col-lg-3 col-sm-12 col-md-3 col-xs-12">
          <div class="form-group">
              <label>Monto:</label>
             <input type="text" name="pidmonto" id="pidmonto" class="form-control" disabled>
           </div>
        </div>

        <div class="col-lg-2 col-sm-12 col-md-3 col-xs-12">
          <div class="form-group">
              <label>Existencia:</label>
             <input type="text" name="pidexistencia" id="pidexistencia" class="form-control" disabled >
           </div>
        </div>
       
        <div class="col-lg-2 col-sm-12 col-md-3 col-xs-12">
          <div class="form-group">
              <label>Cantidad:</label>
             <input type="text" name="pidcantidad" id="pidcantidad" class="form-control" >
           </div>
        </div>
       
       
       
        <div>
        <br>

          <div class="form-group">
            <button type="button"  id="bt_addp" class="btn btn-success ">Agregar</button>
          </div> 

        </div> 
      <div class="row">
          <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <table id="detalles" class="table table-striped table-bordered table-condensed table-hover table table-responcive">
              <thead style="background-color:#A9D0F5">
                <th>Opciones</th>
                <th>Producto</th>
                <th>Forma de pago</th>
                <th>Cantidad</th>
                <th>Monto</th>
               <th>Subtotal</th>
                
              </thead>
              <tfoot>
                <td>Total</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><h4 id="total">S/. 0.00</h4> <input type="hidden" name="total_venta"id="total_venta"></td>
              </tfoot>
              <tbody>
                
              </tbody>


            </table>
          </div>
      </div>

    </div>
  </div>
</div>
 <button type="submit" id="guardar" class="btn btn-primary">Guardar venta</button>

 </div>

 @section('scripts')
        {!!Html::script('tablas/main7.js')!!}
        
@endsection

{!!Form::close()!!}