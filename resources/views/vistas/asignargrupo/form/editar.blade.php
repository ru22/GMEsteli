@extends('layouts.admin')
@section('content')
<div class="row container-fluid">
    <div class="box box-primary container-fluid">
         <div class="row">
        	<div class="container-fluid">
                {!!Form::open(['route'=>'asignacion.store','method'=>'POST'])!!}
                {{Form::Token()}}

        		<div class="row container-fluid">
        			<div class="col-md-8"> 
        		        <div class="form-group"> 
        		           	<label>Tutor:</label>      
        		            <input  class="form-control"  value="{{$user->name}}">
                            <input name="user" type="hidden" class="form-control"  value="{{$user->id}}">
        		        </div>

        		    </div>
        		</div>
         		 
        		<div class="row container-fluid">
        	        <div class="col-md-3">
        	        
                        <label>Grados</label>   
                        <select name="grados" id="pigrados" class="form-control select pidanio">
                           	@foreach($grados as  $grados)
                              <option value="">{{$grados->grado}}</option>
                            @endforeach>
                       	</select>
                         <button type="button" class="btn btn-info" id="grados" >Asignar</button>
                      

                        <table class="table" id="detagrado">
                                <tr>
                                     <th>option</th>
                                     <th>Seccion</th>
                                    
                                </tr>
                                <thead>
                                    <tbody>
                                        
                                    </tbody>
                                </thead>
                        </table>

                    </div>
                   
                    
                    <div class="col-md-3">
        	              <div class="form-group"> 
        	                <label>Asignaturas:</label>
        	                  <select name="asignaturas" id="pidasignaturas" class="form-control asignaturas">
        	                    @foreach($asignaturas as  $asignaturas)
        	                      <option value="{{$asignaturas->id}}">{{$asignaturas->nombre}}</option>
        	                     @endforeach>
        	                  </select> 
                              <button type="button" class="btn btn-info" id="asignaturas">Asignar</button>
                            
        	              </div>

                            <table class="table" id="detaasig">
                                <tr>
                                     <th>option</th>
                                     <th>Seccion</th>
                                    
                                </tr>
                                <thead>
                                    <tbody>
                                        
                                    </tbody>
                                </thead>
                            </table>
        	        </div>

                    <div class="col-md-2">
                        <label>Seccion</label>
                        <select name="pidseccion" id="pidseccion" class="form-control">
                            @foreach($seccion as  $seccion)
        	                    <option value="{{$seccion->id}}">{{$seccion->seccion}}</option>
        	                @endforeach>
                        </select>
                            <button type="button" class="btn btn-info" id="seccion">Asignar</button>
                        <table class="table" id="deta">
                        	<tr>
                                 <th>option</th>
                        		 <th>Seccion</th>
                        		
                        	</tr>
                        	<thead>
                        		<tbody>
                        			
                        		</tbody>
                        	</thead>
                        </table>
                    </div> 
                 
        	    </div>
                    <button type="submit" class="btn btn-info" >Guardar</button>
                {!!Form::close()!!}  
        	</div>
        </div>  

    </div>
</div>  
@stop 
@section('scripts')
 		{!!Html::script('bootstrap/js/asignaturas.js')!!}
        {!!Html::script('bootstrap/js/seccion.js')!!}
        {!!Html::script('tablas/main2.js')!!}

        {!!Html::script('bootstrap/js/Asignacionsec.js')!!}
        {!!Html::script('bootstrap/js/AsignacionAsig.js')!!}
        {!!Html::script('bootstrap/js/AsignacionGrad.js')!!}
@endsection 
