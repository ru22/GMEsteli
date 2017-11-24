<div class="row">
	<div class="container-fluid">
		<div class="row container-fluid">
			<div class="col-md-12"> 
		        <div class="form-group">
		            <label>Tutor:</label>      
		            <select name="pidanio" id="pidanio" class="form-control select pidanio">
		           		@foreach($user as  $user)
		           			<option value="{{$user->id}}">{{$user->name}}</option>
		           		@endforeach>
                    </select>
		        </div> 
		    </div>
		</div>
		<div class="row container-fluid"> 
	        <div class="col-md-4">
                <label>Grados</label>   
                <select name="pidanio" id="pidanio" class="form-control select pidanio">
                   	@foreach($grados as  $grados)
                      <option value="{{$grados->id}}">{{$grados->grado}}</option>
                    @endforeach>
               	</select>
            </div>

              <div class="col-md-4">
	              <div class="form-group"> 
	                <label>Asignaturas:</label>
	               
	                  <select name="asignaturas" class="form-control asignaturas">
	                    @foreach($asignaturas as  $asignaturas)
	                      <option value="{{$asignaturas->id}}">{{$asignaturas->nombre}}</option>
	                     @endforeach>
	                  </select> 
	              </div>
	          </div>


            <div class="col-md-4">
                <label>Seccion</label>
                <select name="pidseccion" id="pidseccion" class="form-control pidseccion">
                    @foreach($seccion as  $seccion)
	                    <option value="{{$seccion->id}}">{{$seccion->seccion}}</option>
	                @endforeach>
                </select>
            </div> <br>
         
	    </div>  
	</div>
</div>  
@section('scripts')
 		{!!Html::script('bootstrap/js/asignaturas.js')!!}
        {!!Html::script('bootstrap/js/seccion.js')!!}
        {!!Html::script('tablas/main2.js')!!}
@endsection
