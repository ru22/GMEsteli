<div> 
    <div class="form-group">
    <h5 class="cal_titulo"><label class="label label-success">Datos del Estudiante</label></h5>
		<div class="tab-content container-fluid">
			    <div class="row"> 
			    	
				    <div class="col-md-3"> 
				    	<div class="form-group"> 
						    <label>Codigo:</label>
						    <input type="text" name="codigo" id="codigo" class="form-control codigo" value="{{$est->codigo}}" disabled>
				      	</div>
			     	</div>

				     <div class="col-md-4"> 
				     	<div class="form-group">
		        			<label>Nombres:</label>
		       				 <input type="text" name="nombrese" class="form-control nombres" value="{{$est->nombrese}}">
		   				</div>
	   				 </div>

	   				 <div class="col-md-5">
	   				 	<div class="form-group">
							   <label>Apellidos:</label>
							   <input type="text" name="apellidose" class="form-control nombres" value="{{$est->apellidose}}">
						</div>
	   				</div>

				</div>

				<div class="row">

					<div class="col-md-3">
						<div class="form-group">
				            <label>Fecha:</label>
				            <input name="fnac" type="date" class="form-control " value="{{$est->fnac}}">
				        </div>
					</div>
					
					<div class="col-md-3">
						<div class="form-group">
				            <label>Sexo:</label>
				            <select  type="text" name="sexo" class="form-control">
				              <option value="Masculino">Masculino</option>
				              <option value="Femenino">Femenino</option>
				            </select>
				        </div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
				            <label>Colegio Procedencia:</label>
				            <input type="text" name="procedencia" class="form-control colegio" value="{{$est->procedencia}}">
				        </div>
					</div>

				</div>

				<div class="row">
					<div class="form-group">
						 <div class="col-md-12">
	       					 <label>Direccion:</label>
				            <div class="row">
				                <div class="col-md-12 col-xs-12">
				                    <input type="text" name="direccion" class="form-control" value="">
				                </div>
				          </div>
	     			 	</div>
					</div>
				</div><br>
		</div>
	</div>
	<h5 class="cal_titulo"><label class="label label-success">Datos del Tutor</label></h5>
    <div class="tab-content container-fluid">
    	
    	
    		<div class="row">
    			<div class="col-md-6"> 
		            <div class="form-group">
		                <label>Nombres:</label>
		                <input name="nombres" type="text" class="form-control nombres" value="{{$est->nombrese}}">
		            </div>
        		</div>

        		<div class="col-md-6">
			        <div class="form-group">
			            <label>Apellidos:</label>
			            <input name="apellidos" type="text" class="form-control apellidos" placeholder="Apellidos...">
			        </div>
      			</div>
    		</div>

    		<div class="row">
			    <div class="col-md-3">
			        <div class="form-group">
			            <label>Cedula:</label>
			            <input name="cedula" type="text" class="form-control cedula">
			         </div>
			    </div>

			    <div class="col-md-3">
          			<label>Telefono:</label>
          			<input name="telefono" type="text" class="form-control telefono" placeholder="Telefono...">
      			</div>

      			<div class="col-md-6">
		            <label>Parentesco:</label>
		          	<input name="parentesco" type="text" class="form-control parentesco" placeholder="Parentesco...">
     			 </div>
		    </div> 


		    <div class="row">
		    	<div class="col-md-6"> 
		    		<div class="form-group">
				        <label>Lugar de trabajo:</label>
				        <input name="lugar_trabajo" type="text" class="form-control trabajo" placeholder="Lugar de trabajo...">
				    </div>
		    	</div>

		   		<div class="form-group">
		   		 	<div class="col-md-6">
				      	<label>Ocupacion:</label>
				        <input name="ocupacion" type="text" class="form-control ocupacion" placeholder="Ocupacion...">
				    </div>
				</div>
		    
		    </div>

			<div class="row">
			    <div  class="col-md-12">
			        <label>Direccion:</label>
			        <div class="form-group">
			            <input name="direccion" type="text" class="form-control direccion" placeholder="Direccion...">
			        </div>
			    </div>
			 </div>
   	</div>
</div>  
	
@section('scripts')
  {!!Html::script('bootstrap/js/maskedinput.js')!!} 
  {!!Html::script('bootstrap/js/main.js')!!} 
@endsection