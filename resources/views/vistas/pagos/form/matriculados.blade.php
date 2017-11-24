@extends('layouts.admin')
@section('content')
  

<div class="container-fluid">
    <div class="row container-fluid">
      <section>
        <div class="wizard container-fluid">
            <div class="wizard-inner"><br>
            
              <div class="row"> 
                      <div class="container-fluid">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                         
                         
                          <br>
                          <div class="table-responsive">

                            <table id="table_est" class="display  table-hover">
                              <thead style="background-color:#A9D0F5"> 
                              <tr>
                                   
                                
                                  <th>Codigo estudiante</th>
                                  <th>Nombres</th>
                                   <th>Apellidos</th>
                                   
                                   <th>Opciones</th>
                                   
                                </tr>
                              </thead>
                              <tbody>
                            @foreach ($pagos as $pag)
                                <tr>
                                <td>{{$pag->codigo}}</td>
                                 <td>{{$pag->nombrese}}</td>
                               
                                <td>{{$pag->apellidose}}</td>
                                
                                 
                               
                
                               
                                  
                                   <td>
            
                                   <a href="{{ route('pagos.edit', $pag->id ) }}" class="btn btn-success pull-right">Canselar Mensualidad</a> 
                                

                                  </td>
                                  
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