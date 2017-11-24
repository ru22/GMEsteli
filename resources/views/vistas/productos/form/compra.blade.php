<div class="container-fluid">
<div class="row">

 
<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
<div class="row">







<div class="">
      <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12">
          <div class="form-group">
             <label>Productos:</label>
              <select name="idproducto" class="form-control" id="pidproducto" data-live-search="true">
                  <option value="">Seleccione Producto</option>
                 @foreach($producto as $producto)
                  <option value="{{$producto->id}}">{{$producto->descripcion}}</option>
                @endforeach
                  
              </select>
          </div>
           
      </div>
  </div>  
 
<div class="col-lg-3 col-sm-2 col-md-3 col-xs-12">
<div class="form-group">
<label>Cantidad</label>
 <input type="number" name="cantidad"  class="form-control" >
</div>
</div>


           <div class="col-lg-3 col-sm-2 col-md-3 col-xs-12">
            <div class="form-group">
                    <label>Fecha:</label>
                    <input name="fecha" type="date" class="form-control">
                </div>
          </div>
 

</div>
</div>



</div>

<br>

</div>