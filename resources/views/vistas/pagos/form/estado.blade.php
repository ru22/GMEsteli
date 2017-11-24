@extends('layouts.admin')
@section('content')
  

<div class="container-fluid">
    <div class="row container-fluid">
      <section>
        <div class="wizard container-fluid">
            <div class="wizard-inner"><br>
            
               <div class="row">
                 <div class="col-md-3">
                   <select class="form-control grados">
                   @foreach ($grados as $grados)
                     <option value="{{$grados->id}}" @if($grados->id==auth()->user()->select_grados_id) selected @endif>{{$grados->grado}}</option>
                      @endforeach
                   </select>
                 </div>

                 <div class="col-md-3">
                   <select class="form-control seccion">
                   @foreach ($seccions as $seccions)
                     <option value="{{$seccions->id}}" @if($seccions->id==auth()->user()->select_seccion_id) selected @endif>{{$seccions->seccion}}</option>
                     @endforeach
                   </select>
                 </div>
                <button  onclick="buscar_estado();" class="btn btn-info">Guardar</button>
               </div>
              <div class="row"> 
                      <div class="container-fluid">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        
                 
                          <div class="table-responsive">

                            <table id="" class="table">
                              <thead> 
                              <tr>
                                   
                                
                                  <th>Grado</th>
                                  <th>Seccion</th>
                                   <th>Apellidos</th>
                                   <th>Nombres</th>
                                   <th>Enero</th>
                                   <th>Febrero</th>
                                   <th>Marzo</th>
                                   <th>Abril</th>
                                   <th>Mayo</th>
                                   <th>Junio</th>
                                   <th>Julio</th>
                                   <th>Agosto</th>
                                   <th>Septiembre</th>
                                   <th>Octubre</th>
                                   <th>Nobiembre</th>
                                   <th>Diciembre</th>
                                   
                                   
                                </tr>
                              </thead>
                              <tbody>
                            @foreach ($pagos as $pag)
                                <tr>

                                <td>{{$pag->grado}}</td>
                                <td>{{$pag->seccion}}</td>
                                <td>{{$pag->nombrese}}</td>
                                 <td>{{$pag->apellidose}}</td>
                                <td>{{$pag->Enero}}</td>
                                <td>{{$pag->Febrero}}</td>
                                 <td>{{$pag->Marzo}}</td>
                                <td>{{$pag->Abril}}</td>
                                <td>{{$pag->Mayo}}</td>
                                 <td>{{$pag->Junio}}</td>
                                <td>{{$pag->Julio}}</td>
                                <td>{{$pag->Agosto}}</td>
                                 <td>{{$pag->Septiembre}}</td>
                                <td>{{$pag->Octubre}}</td>
                                <td>{{$pag->Nobiembre}}</td>
                                 <td>{{$pag->Diciembre}}</td> 
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                          </div>
                       </div>
                     </div>
              </div>
            </div>
        </div>
    </section>
   </div>
</div>

@stop
@section('scripts')
      {!!Html::script('bootstrap/js/notas.js')!!}
@endsection