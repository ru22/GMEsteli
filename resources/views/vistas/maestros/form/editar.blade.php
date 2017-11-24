<div class="row container-fluid">
      
	<div class="row">
			<div class="col-lg-6">
				<div class="form-group"> 
					<label>Nombres</label>
					<input type="text" name="nombres" value="{{$maes->nombres}}" class="form-control">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					<label>Apellidos</label>
					<input type="text" name="apellidos" value="{{$maes->nombres}}" class="form-control"> 
				</div>
			</div>
	</div>
	<div class="row">
			<div class="col-lg-3">
				<div class="form-group">
					<label>Telefono</label>
					<input type="text" name="telefono" value="{{$maes->telefono}}" class="form-control">
				</div>
			</div>
			<div class="col-lg-3">
				<div class="form-group">
					<label>Cedula</label>
					<input type="text" name="cedula" value="{{$maes->cedula}}" class="form-control">
				</div>
			</div>
			<div class="col-md-3">
		        <label>Sexo:</label>
		         <select name="sexo" class="form-control">
		           <option value="Masculino">Masculino</option>
		           <option value="Femenino">Femenino</option>
		        </select>
		        
		     
		     </div>
		     <div class="col-lg-3">
				<div class="form-group">
					<label>Profecion</label>
					<input type="text" name="profecion"  class="form-control">
				</div>
			</div>
	</div>

	<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<label>Direccion</label>
					<input type="text" name="direccion"  class="form-control">
				</div>
			</div>
	</div>
</div>