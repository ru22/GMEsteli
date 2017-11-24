
<br> <div class="container-fluid">
        <div class="row container-fluid">
                <section>
                    <div class="row container-fluid">  
                        <div class="row"> 
                        
                            <div class="">  <!-- colocar la clase row --> 
                            <div class="col-md-5"> 
                                <div class="form-group">
                                    <label>Grado aprobado</label>
                                    <select name="anioaprobado" id="" class="form-control">
                                    <option value="Primer Grado">Primer Grado</option>
                                    <option value="Segundo Grado">Segundo Grado</option>
                                    <option value="Tercer Grado">Tercer Grado</option>
                                    <option value="Cuarto Grado">Cuarto Grado</option>
                                    <option value="Quinto Grado">Quinto Grado</option>
                                    <option value="Sexto Grado">Sexto Grado</option>
                                    <option value="Primer Annio">Primer Año</option>
                                    <option value="Segundo Annio">Segundo Año</option>
                                    <option value="Tercer Annio">Tercer Año</option>
                                    <option value="Cuarto Annio">Cuarto Año</option>
                                    <option value="Quinto Annio">Quinto Año</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Repitente:</label>
                                        <select name="repitente" class="form-control" id="repitente">
                                            <option value="No">No</option>
                                            <option value="Si">Si</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="col-md-3">
                                <label>Turno:</label>
                                <select name="pidturno" id="pidturno" class="form-control">
                                    <option value="Matutino">Matutino</option>
                                    <option value="Vespertino">Vespertino</option>
                                    <option value="Nocturno">Nocturno</option>
                                    <option value="Savatino">Savatino</option>
                                </select>
                            </div>
                       
                         </div>  
                    <div class="row container-fluid"> 

                        
                    </div>    
                        <div class="row container-fluid">
                            <div class="col-md-3">
                                    <label>Periodo</label>
                                <select name="pidperiodo" id="pidperiodo" class="form-control  select2">
                                    @foreach($anios as $a)
                                        <option value="{{$a->idannios}}">{{$a->periodo}}</option>
                                    @endforeach 
                                </select>
                            </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label>Grados</label>   
                                         <select name="pidanio"  class="form-control select pidanio">
                                            @foreach($grados as $grados)
                                                <option value="{{$grados->id}}">{{$grados->grado}}</option>
                                            @endforeach 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label>Seccion</label>
                                    <select name="pidseccion" id="pidseccion" class="form-control pidseccion">
                                    @foreach($seccion as  $seccion)
                                        <option value="{{$seccion->id}}">{{$seccion->seccion}}</option>
                                     @endforeach 
                                    </select>

                                </div> 
                        </div>
                    

                    <div class="row">
                        <div class="col-md-2"> 
                            <div class="form-group">  
                                <input name="idestudiantes" type="hidden" class="form-control" value="{{$est->id}}" >    
                                 <input name="edad" type="hidden" class="form-control" value="{{$est->edad}}" > 
                            </div>
                        </div>
                        <div class="col-md-2"> 
                            <div class="form-group">  
                            
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div><br> 

 
@section('scripts')
        {!!Html::script('tablas/main2.js')!!}
@endsection
