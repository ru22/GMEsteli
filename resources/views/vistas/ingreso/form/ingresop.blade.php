
<div>  

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Datos del Estudiante</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Datos del Apoderado</a></li>
  </ul><br>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
    	<div class="form-group">
			<div class="tab-content container-fluid">
			    <div class="row">
			    	
				    <div class="col-md-3"> 
				    	<div class="form-group">
						    <label>Codigo:</label>
						    <input type="text" name="codigo" id="texto" class="form-control" placeholder="00000000" >
						    <span class="help-block"></span>
				      	</div>
			     	</div>

				     <div class="col-md-4"> 
				     	<div class="form-group">
		        			<label>Nombres:</label>
		       				 <input type="text" name="nombrese" id="carat" class="form-control" placeholder="Nombres...">
		   				     <span class="help-block"></span>
		   				</div>
	   				 </div>

	   				 <div class="col-md-5">
	   				 	<div class="form-group">
							   <label>Apellidos:</label>
							   <input type="text" name="apellidose" id="apellidosestu" class="form-control" placeholder="Apellidos...">
						       <span class="help-block"></span>
						</div>
	   				</div>

				</div>

				<div class="row">

					<div class="col-md-3">
						<div class="form-group">
				            <label>Fecha:</label>
				            <input name="fnac" type="date" class="form-control">
				        </div>
					</div>
					
					<div class="col-md-3">
						<div class="form-group">
				            <label>Sexo:</label>
				            <select name="sexo" class="form-control" >
				              <option value="Masculino">Masculino</option>
				              <option value="Femenino">Femenino</option>
				            </select>
				        </div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
				            <label>Colegio Procedencia:</label>
				            <input type="text" name="procedencia" id="procedencia"class="form-control" placeholder="Procedencia...">
				             <span class="help-block"></span>
				        </div>
					</div>
					
				</div>

				<div class="row">
				    <div  class="col-md-12">
				        <label>Direccion:</label>
				        <div class="form-group">
				            <input name="direccion" type="text" id="direccionestu"class="form-control" placeholder="Direccion...">
				            <span class="help-block"></span>
				        </div>
				    </div>
			 	</div>
				
			</div>
		</div>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">

    	<div class="tab-content container-fluid">
    		<div class="row">
    			<div class="col-md-6"> 
		            <div class="form-group">
		                <label>Nombres:</label>
		                <input name="nombres" type="text"  id="nombrep" class="form-control" placeholder="Nombres...">
		                <span class="help-block"></span>
		            </div>
        		</div>

        		<div class="col-md-6">
			        <div class="form-group">
			            <label>Apellidos:</label>
			            <input name="apellidos" type="text" id="apellidop" class="form-control" placeholder="Apellidos...">
			            <span class="help-block"></span>
			        </div>
      			</div>
    		</div>

    		<div class="row">
			    <div class="col-md-3">
			        <div class="form-group">
			            <label>Cedula:</label>
			            <input name="cedula" id="cedula" type="text" class="form-control" placeholder="000-000D"  >
			             <span class="help-block"></span>
			         </div>
			    </div>

			    <div class="col-md-3">
			    <div class="form-group">
          			<label>Telefono:</label>
          			<input name="telefono" type="text" id="telefono" class="form-control"  placeholder="Telefono...">
      			     <span class="help-block"></span>
      			</div>
      			</div>

      			<div class="col-md-6">
		            <div class="form-group">
		            <label>Parentesco:</label>
		          	<input name="parentesco" type="text" id="parentesco" class="form-control" placeholder="Parentesco...">
     			     <span class="help-block"></span>
     			    </div>

     			 </div>
		    </div> 


		    <div class="row">
		    	<div class="col-md-6"> 
		    		<div class="form-group">
				        <label>Lugar de trabajo:</label>
				        <input name="lugar_trabajo" type="text" id="lugar" class="form-control" placeholder="Lugar de trabajo...">
				        <span class="help-block"></span>
				    </div>
		    	</div>

		   		
		   		 	<div class="col-md-6">
		   		 	<div class="form-group">
				      	<label>Ocupacion:</label>
				        <input name="ocupacion" type="text" id="ocupacion" class="form-control" placeholder="Ocupacion...">
				         <span class="help-block"></span>
				    </div>
				</div>
		    
		    </div>

			<div class="row">
			    <div  class="col-md-12">
			        <label>Direccion:</label>
			        <div class="form-group">
			            <input name="direccion" type="text" id="direccionp" class="form-control" placeholder="Direccion...">
			             <span class="help-block"></span>

			        </div>
			    </div>
			 </div>

			<div class="pull-right">
		         <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar <span class="glyphicon glyphicon-floppy-remove"></span></button>
		         <button type="submit" class="btn btn-primary">Guardar <span class="glyphicon glyphicon-floppy-disk"></span></button>
		    </div>

   		</div><br>
    </div>
  </div>

</div> 
@section('scripts')
 		{!!Html::script('tablas/bootstrap-datepicker.js')!!}
        {!!Html::script('tablas/main.js')!!}
        {!!Html::script('tablas/main3.js')!!}
        {!!Html::script('tablas/main5.js')!!}
        {!!Html::script('tablas/main2.js')!!}
       
@endsection