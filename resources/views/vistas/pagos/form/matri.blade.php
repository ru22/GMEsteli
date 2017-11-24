    
 <div class="container-fluid">
 <div class="row">

 
<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
<div class="row">

 





<div class="col-lg-2 col-sm-2 col-md-3 col-xs-12">
<div class="form group">
 <label>Codigo:</label>
<input type="text" name="procedencia" value="{{$est->codigo}}" class="form-control">
</div>
</div>

<div class="col-lg-4 col-sm-2 col-md-3 col-xs-12">
<div class="form-group">
  <label>Nombres:</label>
 <input type="text" name="nombrese" value="{{$est->nombrese}}" class="form-control">
</div>
</div>
<div class="col-lg-4 col-sm-2 col-md-3 col-xs-12">
<div class="form-group">
 <label>Apellidos:</label>
 <input type="text" name="apellidose" value="{{$est->apellidose}}" class="form-control">
</div>
</div>


<div class="col-lg-1 col-sm-2 col-md-3 col-xs-12">
<div class="form group">
 <label>Id:</label>
 <input type="text" name="id" value="{{$est->id}}" class="form-control">

</div>
</div>

  
</div>
</div>



</div>

<br>
<div class="row">
  <div class="panel panel-primary ">
  <div class="panel-body">
       

    
   <div class="col-lg-3 col-sm-12 col-md-3 col-xs-12">
          <div class="form-group">
              <label>Paga:</label>
              <select name="pidmes" class="form-control" id="pidmes"   placeholder="Pago" >
               <option value="Matricula">Matricula</option>    
              </select>
           </div>
        </div>
        

   <div class="col-lg-3 col-sm-12 col-md-3 col-xs-12">
      <div class="form-group">
        <label>Forma de pago:</label>
          <select name="pidforma_pago" id="pidforma_pago" class="form-control" >
            <option value="Efectivo">Efectivo</option>
            <option value="Cheque">Cheque</option>
            <option value="Dolares">Dolares</option>
          </select>
        </div>
      </div>

       
         <div class="col-lg-3 col-sm-12 col-md-3 col-xs-12">
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


    </div>
    </div>
    </div>

</div>
<div class="col-md-5">
          <div class="form-group">
             <label>Confirmacion de Canselacion:</label>
             <label><input type="checkbox" name="estado"  value="Canselado"id="pidmonto" />Si</label>
             
           </div>
        </div>
       

</div>
<br>

       