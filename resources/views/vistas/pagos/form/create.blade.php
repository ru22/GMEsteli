 {!!Form::open(['route'=>'pagos.store','method'=>'POST'])!!}
  {{Form::Token()}}

  

<div class="row">
  <div class="panel panel-primary ">
  <div class="panel-body">

  <div class="row">
      <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
          <div class="form-group">
             <label>Estudiante:</label>
              <select name="idestudiantes" class="form-control selectpicker" data-live-search="true">
                 @foreach($matriculas as $est)
                  <option value="{{$est->id}}_{{$est->nombrese}}_{{$est->apellidose}}">{{$est->nombrese}}-{{$est->apellidose}}</option>
              @endforeach
                  
              </select>
          </div>
           
      </div>
  </div> 

        <!-- <div class="col-lg-2 col-sm-12 col-md-3 col-xs-12">
          <div class="form-group">
              <label>Tipo de pago:</label>
              <select name="pidtipo_pago" class="form-control" id="pidtipo_pago">
                   <option value="1" id="matricula">Matricula</option>
                    <option value="2">Mensualidad</option>
              </select>
           </div>
        </div>-->
        

        <div class="col-lg-3 col-sm-12 col-md-3 col-xs-12">
          <div class="form-group">
           <div class="panel panel-primary ">
            <div class="panel-body">
            <input type="radio" name="" id="idmatricula" value="pidtipo_pago">
              <label>Matricula:</label>
              <input type="radio" name="pidtipo_pago" id="pidtipo_pago" value="pidtipo_pago">
             <label>Mes:</label>
              </div>
             </div>
            </div>
         </div>
       

    
   <div class="col-lg-2 col-sm-12 col-md-3 col-xs-12">
          <div class="form-group">
              <label>Mes:</label>
              <select name="pidmes" class="form-control selectpicker" id="pidmes"     data-live-search="true" id="turno" disabled>
                  <option value="0">Maticula</option>
                  <option value="1">Enero</option>
                  <option value="2">Frebrero</option>
                  <option value="3">Marzo</option>
                  <option value="4">Abril</option>
                  <option value="5">Mayo</option>
                  <option value="6">junio</option>
                  <option value="7">julio</option>
                  <option value="8">Agosto</option>
                  <option value="9">Septiembre</option>
                  <option value="11">Obtubre</option>
                  <option value="2">Noviembre</option>ss
                  <option value="13">Diciembre</option>
              </select>
           </div>
        </div>
        

   <div class="col-lg-2 col-sm-12 col-md-3 col-xs-12">
      <div class="form-group">
        <label>Forma de pago:</label>
          <select name="pidforma_pago" id="pidforma_pago" class="form-control selectpicker" data-live-search="true" id="turno">
            <option value="1">Efectivo</option>
            <option value="2">Cheque</option>
            <option value="2">Dolares</option>
          </select>
        </div>
      </div>

       
         <div class="col-lg-2 col-sm-12 col-md-3 col-xs-12">
          <div class="form-group">
              <label>Monto:</label>
             <input type="text" name="pidmonto" id="pidmonto" class="form-control" >
           </div>
        </div>
       
       
        <div>
        <br>
          <div class="form-group">
            <button type="button"  id="bt_addp" class="btn btn-primary">Agregar</button>
          </div> 

        </div> 
      <div class="row">
          <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <table id="detalles" class="table table-striped table-bordered table-condensed table-hover table table-responcive">
              <thead style="background-color:#A9D0F5">
                <th>Opciones</th>
                 <th>Mes</th>
                <th>Forma de pago</th>
                <th>Tipo de pago</th>
                <th>Monto</th>
               <th>Subtotal</th>
                
              </thead>
              <tfoot>
                <td>Total</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><h4 id="total">S/.0.00</h4></td>
              </tfoot>
              <tbody>
                
              </tbody>


            </table>
          </div>
      </div>

    </div>
  </div>
</div>
 <button type="submit" class="btn btn-primary">guardar</button>

{!!Form::close()!!}