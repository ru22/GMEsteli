 <div class="row container-fluid">
	  <div class="col-lg-6 col-sm-6 col-md-12 col-xs-12">
	    <label>Nombres:</label>
		 <div class="form-group">
			 <input type="text" name="nombrese" value="{{$est->nombrese}}" class="form-control">
		 </div>
	  	</div>  
		<div class="col-lg-6 col-sm-6 col-md-12 col-xs-12">
		     <label>Apellidos:</label>
		     <div class="form-group">
		       <input type="text" name="apellidose" value="{{$est->apellidose}}" class="form-control">
		     </div>
		 </div>
		  <div class="col-lg-3 col-sm-4 col-md-4 col-xs-4">
	        <label>Fecha:</label>
	          <div class="form-group">
	            <input name="fnac" type="text" value="{{$est->fnac}}" class="form-control">
	          </div> 
	       </div>
	       <div class="col-lg-3 col-sm-4 col-md-4 col-xs-4">
	        <label>Sexo:</label>
	          <div class="form-group">
	            <select name="sexo" value="{{$est->sexo}}"  class="form-control">
	                <option value="Masculino">Masculino</option>
	                <option value="Femenino">Femenino</option>
	            </select>
	          </div>
	        </div>
	         <div class="col-lg-6 col-sm-12 col-md-121 col-xs-12">
	          <label>Procedencia:</label>
	           <div class="form-group">
	             <input type="text" name="procedencia" value="{{$est->procedencia}}" class="form-control">
	           </div>
	         </div>
	         <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
	           <div class="form-group">
	            <label>Direccion:</label>
	            <input type="text" name="direccion" value="{{$est->direccion}}" class="form-control">
	           </div>
	         </div>
</div>
     