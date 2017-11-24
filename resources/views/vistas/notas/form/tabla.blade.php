 <div class="box box-primary container-fluid">
      <div class="row container-fluid">
      <h3 class="cal_titulo">Ingreso de calificaciones</h3>
          <div class="col-md-2">
              <div class="form-group"> 
               <label>Grado:</label>
               @if(auth()->check())
                  <select name="grados" class="form-control grados">
                      @foreach(Auth()->user()->grados as $grados)
                        <option value="{{$grados->id}}">{{$grados->grado}}</option>
                      @endforeach 
                  </select> 
                @endif
          </div>
        </div>

          <div class="col-md-3">
              <div class="form-group">
                <label>Asignaturas:</label>
                @if(auth()->check())
                  <select name="asignaturas" class="form-control asignaturas">
                      @foreach(Auth()->user()->asignaturas as  $asignaturas)
                        <option value="{{$asignaturas->id}}">{{$asignaturas->nombre}}</option>
                      @endforeach 
                  </select> 
                @endif
              </div>
          </div>

          <div class="col-md-2">
              <div class="form-group">
                <label>Sección</label>
                 @if(auth()->check())
                  <select name="seccion" id="" class="form-control  select2 seccion">
                      @foreach(Auth()->user()->seccions as $seccions)
                          <option value="{{$seccions->id}}" @if($seccions->id==auth()->user()->select_seccion_id) selected @endif>{{$seccions->seccion}}</option>
                      @endforeach 
                  </select>
                 @endif
              </div>
          </div>

          <div class="col-md-2">
              <div class="form-group">
                <label>Parcial:</label>
                  <select name="parcial" id="parcial" class="form-control  select2">
                     <option value="0">Primer Parcial</option>
                     <option value="1">Segungo Parcial</option>
                  </select>
              </div>
          </div><br>

           <div class="col-md-3">
              <div class="form-group">
               <button type="button" onclick="buscar_nota();" class="btn btn-primary">Buscar</button>
                 
              </div>
          </div> 
      </div>
      
   
      <div class="row container-fluid">
        <div>
          <table class="table table-responsive table-hover" > 
            <thead > 
             <th></th> 
              <th>Nombre</th> 
              <th>Apellidos</th>   
              <th>Asignatura</th> 
              <th>Nota I</th> 
              <th>Nota II</th>
              <th>Nota NS</th>
              <th>Nota IIIP</th> 
              <th>Nota II\V</th>
              <th>Nota NS</th>
              <th>Nota NF</th>

            </thead> 
                 
                  @foreach ($calificaciones as $calificaciones)

                  {!!Form::model($calificaciones,['route'=>['notas.update',$calificaciones->id],'method'=>'PUT'])!!}
                   {{Form::Token()}}
                    <tr>
                      <div id="inicio">
                        <div>
                          <td><input type="hidden" name="id[]" value="{{$calificaciones->id}}"></td> 
                          <td>{{$calificaciones->nombrese}}</td>
                          <td>{{$calificaciones->apellidose}}</td>  
                          <td>{{$calificaciones->nombre}}</td> 

                          <td><input type="number" class="form-control" name="primer[]" value="{{$calificaciones->IP}}"></td> 
                          <td><input type="number" class="form-control" name="segundo[]" value="{{$calificaciones->IIP}}"></td>
                          <td><input type="number" class="form-control" name="notaS[]"  value="{{$calificaciones->NS}}"></td>
                          <td><input type="number" class="form-control" name="notaIII[]" value="{{$calificaciones->IIIP}}"></td>
                          <td><input type="number" class="form-control" name="notaVI[]" value="{{$calificaciones->IVP}}"></td>
                          <td><input type="number" class="form-control" name="notaSS[]" disabled value="{{$calificaciones->NSS}}"></td>
                          <td><input type="number" class="form-control" name="notaF[]" disabled value="{{$calificaciones->NF}}"></td>
                          </div>
                        </tr>
                         @endforeach 
                        <div class="col-md-3">
                           <div class="form-group">  
                            <input name="enviar" type="submit" id="notas"  class="btn btn-info"></input> 
                        </div>
                        </div> 
                    </div>  
                  {!!Form::close()!!} 
                </tr>          
          </table>
        </div>
      </div> 
</div>


@section('scripts')
      {!!Html::script('bootstrap/js/notas.js')!!}
@endsection
