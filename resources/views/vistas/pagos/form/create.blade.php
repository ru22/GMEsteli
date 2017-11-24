<div class="box box-primary container-fluid">
<div class="row container-fluid">
  <h3>Pago de Mensualidad</h3>
  <hr/>
</div>
<div class="container-fluid">
<div class="row">

 <div  class="col-md-4">
                <img  id="perfil" src="/img/usuario.jpg" width="100px"  alt="User Image">
                <div>
                    <br>
                    <div class="row container-fluid">
                      <button class="btn btn-primary"><span ></span> {{$pagos->nombrese}} {{$pagos->apellidose}}</button>
                    </div>
                </div>
 </div> 


 <div class="col-lg-6">
     
        <div class="container-fluid">
          <h3><label class="label label-success">Datos del estudiante</label></h3>
              <br>
                                <tr>
                              <th><span class="glyphicon glyphicon-ok"> </span> Codigo</th>:....................................................... <td>{{$pagos->codigo}}</td><br>
                               
                   
                                <th><span class="glyphicon glyphicon-ok"> </span> Grado</th>:...................................................... <td>{{$pagos->grado}}</td><br>
                                <th><span class="glyphicon glyphicon-ok"> </span> Seccion</th>:.................................................... <td>{{$pagos->seccion}}</td><br>
                                <th><span class="glyphicon glyphicon-ok"> </span> Turno</th>:...................................................... <td>{{$pagos->tuno}}</td><br>
                              
                                                            
                                </tr>
                    
        </div>
     
  </div>

<div class="col-lg-2">
<h3><label class="label label-success">Periodo</label></h3>
     <br>      
<h3>{{$pagos->periodo}}</h3>
</div>
</div>
<br>
   <!-----------
  <h3 class="pull-center">Estado de cuenta</h3>
  <div class="row">
  <div class="panel panel-primary ">
  <div class="panel-body">
         
          <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <table id="deta" class="table table-striped table-bordered table-condensed table-hover table table-responcive">
              <thead  style="background-color:#A9D0F5">
              <tr>
                
                                  <th>Matricula</th>
                                  <th>Enero</th>
                                  <th>Febrero</th>
                                  <th>Marzo</th>
                                  <th>Abril</th>
                                  <th>Mayo</th>
                                  <th>Junio</th>
                                  <th>Julio</th>
                                  <th>Agosto</th>
                                  <th>Septiembre</th>
                                  <th>Octubre</th>
                                  <th>Nobiembre</th>
                                  <th>Diciembre</th>
                                 
                                  <th>Opcion</th>
              </tr>
              </thead>
              
              <tbody>
            @foreach($tabla as $vest)
                <tr>
        
               
                                <td class="col-lg-1 col-sm-2 col-md-3 col-xs-12">{{$vest->Matricula}}</td>
                                <td class="col-lg-1 col-sm-2 col-md-3 col-xs-12">{{$vest->Enero}}</td>
                                <td class="col-lg-1 col-sm-2 col-md-3 col-xs-12">{{$vest->Febrero}}</td>
                                <td class="col-lg-1 col-sm-2 col-md-3 col-xs-12">{{$vest->Marzo}}</td>
                                <td class="col-lg-1 col-sm-2 col-md-3 col-xs-12">{{$vest->Abril}}</td>
                                <td class="col-lg-1 col-sm-2 col-md-3 col-xs-12">{{$vest->Mayo}}</td>
                                <td class="col-lg-1 col-sm-2 col-md-3 col-xs-12">{{$vest->Junio}}</td>
                                <td class="col-lg-1 col-sm-2 col-md-3 col-xs-12">{{$vest->Julio}}</td>
                                <td class="col-lg-1 col-sm-2 col-md-3 col-xs-12">{{$vest->Agosto}}</td>
                                <td class="col-lg-1 col-sm-2 col-md-3 col-xs-12">{{$vest->Septiembre}}</td>
                                <td class="col-lg-1 col-sm-2 col-md-3 col-xs-12">{{$vest->Octubre}}</td>
                                <td class="col-lg-1 col-sm-2 col-md-3 col-xs-12">{{$vest->Nobiembre}}</td>
                                <td class="col-lg-1 col-sm-2 col-md-3 col-xs-12">{{$vest->Diciembre}}</td>
                               
                                  <th>
                                    <a href="{{URL::action('RecivopController@show',$vest->id)}}" target="_blank"> <button class="btn btn-info pull-right">Imprimir</button></a>
                                  </th> 
                </tr>          
                </tr>    
                </tr>    
            @endforeach
            </tbody>
            </table>
          </div>
        </div>
         </div>
        </div>------>
        <br>  
      {!!Form::model($tabla,['route'=>['pagos.update',$vest->id],'method'=>'PUT'])!!}
      <h3>Selecione el mes a canselar</h3> 
       <br>                
<div class="row">
<div class="panel panel-primary ">
<div class="panel-body">
<div class="col-lg-6">
<div class="form group">
  <label><input type="checkbox" name="enero"  value="{{$vest->Enero}}" id="eenero"  />Enero</label>
 
</div>



<div class="form-group">

 <label><input type="checkbox" name="febrero"  value="{{$vest->Febrero}}" id="febrero" />Febrero</label>

</div>


<div class="form-group">
 
 <label><input type="checkbox" name="marzo"  value="{{$vest->Marzo}}"  id="marzo" />Marzo</label>

</div>



<div class="form-group">

 <label><input type="checkbox" name="abril"  value="{{$vest->Abril}}"id="abril" />Abril</label>
</div>


<div class="form-group">

 <label><input type="checkbox" name="mayo"  value="{{$vest->Mayo}}"id="mayo" />Mayo</label>
</div>



<div class="form-group">

 <label><input type="checkbox" name="junio"  value="{{$vest->Junio}}"id="junio" />Junio</label>
</div>

</div>



<div class="col-lg-6">
<div class="form group">
  <label><input type="checkbox" name="julio"  value="{{$vest->Julio}}"id="julio" />Julio</label>
</div>



<div class="form-group">

 <label><input type="checkbox" name="agosto"  value="{{$vest->Agosto}}"id="agosto" />Agosto</label>
</div>


<div class="form-group">

 <label><input type="checkbox" name="septiembre"  value="{{$vest->Septiembre}}"id="septiembre" />Septiembre</label>
</div>




<div class="form-group">

 <label><input type="checkbox" name="octubre"  value="{{$vest->Octubre}}"id="octubre" />Octubre</label>
</div>



<div class="form-group">

 <label><input type="checkbox" name="nobiembre"  value="{{$vest->Nobiembre}}"id="nobiembre" />Nobimbre</label>
</div>



<div class="form-group">

 <label><input type="checkbox" name="diciembre"  value="{{$vest->Diciembre}}"id="diciembre" />Diciembre</label>
</div>


        </div>
       </div>
   </div>
</div>                               

<button type="submit" class="btn btn-primary pull-right" id = "bt">Confirmar</button>
</div>
@section('scripts')
         {!!Html::script('tablas/main8.js')!!}
         {!!Html::script('tablas/main9.js')!!}
        
        
@endsection



{!!Form::close()!!}



<br>
<!-----------<div class="row">
  <div class="panel panel-primary ">
  <div class="panel-body">
       

    
   <div class="col-lg-2 col-sm-12 col-md-3 col-xs-12">
          <div class="form-group">
              <label>Mes:</label>
              
              <select name="pidmes" class="form-control" id="pidmes"   placeholder="Pago" >
                  
                  <option value="Enero">Enero</option>
                   <option value="Febrero">Febrero</option>
                   <option value="Marzo">Marzo</option>
           
              </select>
           </div>
        </div>
        

   <div class="col-lg-2 col-sm-12 col-md-3 col-xs-12">
      <div class="form-group">
        <label>Forma de pago:</label>
          <select name="pidforma_pago" id="pidforma_pago" class="form-control" data-live-search="true" id="turno">
            <option value="Efectivo">Efectivo</option>
            <option value="Cheque">Cheque</option>
           
          </select>
        </div>
      </div>

       
         <div class="col-lg-2 col-sm-12 col-md-3 col-xs-12">
          <div class="form-group">
              <label>Monto:</label>
             <input type="text" name="pidmonto" id="pidmonto" class="form-control" >
           </div>
        </div>

        <div class="col-md-2">
       <label>Periodo</label>
       <select name="pidperiodo" id="pidperiodo" class="form-control  select2">
         @foreach($anios as $a)
       <option value="{{$a->idannios}}">{{$a->periodo}}</option>
         @endforeach 
         </select>
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
                 <th>Periodo</th>
                 <th>Mes</th>
               
                <th>forma de pago</th>
                <th>Monto</th>
               <th>Subtotal</th>

                
              </thead>
              <tfoot>
                <td>Total</td>
                <td></td>
                <td></td>
                
                <td></td>
                <td></td>
           
                <td><h4 id="total">S/. 0.00</h4></td>
              </tfoot>
              <tbody>
                
              </tbody>


            </table>
          </div>
      </div>

    </div>
  </div>
</div>
 <button type="submit" class="btn btn-primary pull-right">Guardar</button>
</div>------>


